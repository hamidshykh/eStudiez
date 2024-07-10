        <!-- Javascript start -->

<!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.3.0/mdb.min.js"
></script>
<script>
        const html = document.documentElement;
        const body = document.body;
        const menuLinks = document.querySelectorAll(".admin-menu a");
        const collapseBtn = document.querySelector(".admin-menu .collapse-btn");
        const toggleMobileMenu = document.querySelector(".toggle-mob-menu");
        const switchInput = document.querySelector(".switch input");
        const switchLabel = document.querySelector(".switch label");
        const switchLabelText = switchLabel.querySelector("span:last-child");
        const collapsedClass = "collapsed";
        const lightModeClass = "light-mode";

            /*TOGGLE HEADER STATE*/
            collapseBtn.addEventListener("click", function () {
            body.classList.toggle(collapsedClass);
            this.getAttribute("aria-expanded") == "true"
            ? this.setAttribute("aria-expanded", "false")
            : this.setAttribute("aria-expanded", "true");
            this.getAttribute("aria-label") == "collapse menu"
            ? this.setAttribute("aria-label", "expand menu")
            : this.setAttribute("aria-label", "collapse menu");
    });

            /*TOGGLE MOBILE MENU*/
            toggleMobileMenu.addEventListener("click", function () {
            body.classList.toggle("mob-menu-opened");
            this.getAttribute("aria-expanded") == "true"
            ? this.setAttribute("aria-expanded", "false")
            : this.setAttribute("aria-expanded", "true");
            this.getAttribute("aria-label") == "open menu"
            ? this.setAttribute("aria-label", "close menu")
            : this.setAttribute("aria-label", "open menu");
    });

        /*SHOW TOOLTIP ON MENU LINK HOVER*/
        for (const link of menuLinks) {
            link.addEventListener("mouseenter", function () {
        if (
            body.classList.contains(collapsedClass) &&
            window.matchMedia("(min-width: 768px)").matches
        ) {
            const tooltip = this.querySelector("span").textContent;
            this.setAttribute("title", tooltip);
        } else {
            this.removeAttribute("title");
        }
    });
        }

    /*TOGGLE LIGHT/DARK MODE*/
    if (localStorage.getItem("dark-mode") === "false") {
            html.classList.add(lightModeClass);
            switchInput.checked = false;
            switchLabelText.textContent = "Light";
        }   

            switchInput.addEventListener("input", function () {
            html.classList.toggle(lightModeClass);
        if (html.classList.contains(lightModeClass)) {
            switchLabelText.textContent = "Light";
            localStorage.setItem("dark-mode", "false");
        } else {
            switchLabelText.textContent = "Dark";
            localStorage.setItem("dark-mode", "true");
        }
            });
</script>
        <!-- Javascript end -->

        
  <!-- cursor styleing script -->

  <script src="https://cdnjs.cloudflare.com/ajax/libs/paper.js/0.12.0/paper-core.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/simplex-noise/2.4.0/simplex-noise.min.js"></script>
<script>
  // set the starting position of the cursor outside of the screen
let clientX = 100;
let clientY = 100;
const innerCursor = document.querySelector(".cursor--small");

const initCursor = () => {
  // add listener to track the current mouse position
  document.addEventListener("mousemove", e => {
    clientX = e.clientX;
    clientY = e.clientY;
  });
  
  // transform the innerCursor to the current mouse position
  // use requestAnimationFrame() for smooth performance
  const render = () => {
    innerCursor.style.transform = `translate(${clientX}px, ${clientY}px)`;
    // if you are already using TweenMax in your project, you might as well
    // use TweenMax.set() instead
    // TweenMax.set(innerCursor, {
    //   x: clientX,
    //   y: clientY
    // });
    
    requestAnimationFrame(render);
  };
  requestAnimationFrame(render);
};

initCursor();

let lastX = 0;
let lastY = 0;
let isStuck = false;
let showCursor = false;
let group, stuckX, stuckY, fillOuterCursor;

const initCanvas = () => {
  const canvas = document.querySelector(".cursor--canvas");
  const shapeBounds = {
    width: 75,
    height: 75
  };
  paper.setup(canvas);
  const strokeColor = "#F3F3F3";
  const strokeWidth = 4;
  const segments = 8;
  const radius = 20;
  
  // we'll need these later for the noisy circle
  const noiseScale = 150; // speed
  const noiseRange = 1; // range of distortion
  let isNoisy = false; // state
  
  // the base shape for the noisy circle
  const polygon = new paper.Path.RegularPolygon(
    new paper.Point(0, 0),
    segments,
    radius
  );
  polygon.strokeColor = strokeColor;
  polygon.strokeWidth = strokeWidth;
  polygon.smooth();
  group = new paper.Group([polygon]);
  group.applyMatrix = false;
  
  const noiseObjects = polygon.segments.map(() => new SimplexNoise());
  let bigCoordinates = [];
  
  // function for linear interpolation of values
  const lerp = (a, b, n) => {
    return (1 - n) * a + n * b;
  };
  
  // function to map a value from one range to another range
  const map = (value, in_min, in_max, out_min, out_max) => {
    return (
      ((value - in_min) * (out_max - out_min)) / (in_max - in_min) + out_min
    );
  };
  
  // the draw loop of Paper.js 
  // (60fps with requestAnimationFrame under the hood)
  paper.view.onFrame = event => {
    // using linear interpolation, the circle will move 0.2 (20%)
    // of the distance between its current position and the mouse
    // coordinates per Frame
    lastX = lerp(lastX, clientX, 0.2);
    lastY = lerp(lastY, clientY, 0.2);
    group.position = new paper.Point(lastX, lastY);
  }
}

initCanvas();
</script>

        
</body>
</html>