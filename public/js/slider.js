var app = new Vue({
    el: '#app',
    data: {
        currentSlide: 0,
        isPreviousSlide: false,
        isFirstLoad: true,
        slides: [
            {
                headlineFirstLine: "texto",
                headlineSecondLine: "texto",
                sublineFirstLine: "texto",
                sublineSecondLine: "texto",
                bgImg: "img/demo.jpg"
              
            },
            {
                headlineFirstLine: "texto",
                headlineSecondLine: "texto",
                sublineFirstLine: "texto",
                sublineSecondLine: "texto",
               bgImg: "img/demo.jpg"
            },
            {
                headlineFirstLine: "Auto",
                headlineSecondLine: "Rifa",
                sublineFirstLine: "Gana tu",
                sublineSecondLine: "Auto",
               bgImg: "img/demo.jpg"
            }
        ]
    },
  mounted: function () {
    var productRotatorSlide = document.getElementById("app");
        var startX = 0;
        var endX = 0;

        productRotatorSlide.addEventListener("touchstart", (event) => startX = event.touches[0].pageX);

        productRotatorSlide.addEventListener("touchmove", (event) => endX = event.touches[0].pageX);

        productRotatorSlide.addEventListener("touchend", function(event) {
            var threshold = startX - endX;

            if (threshold < 150 && 0 < this.currentSlide) {
                this.currentSlide--;
            }
            if (threshold > -150 && this.currentSlide < this.slides.length - 1) {
                this.currentSlide++;
            }
        }.bind(this));
  },
    methods: {
        updateSlide(index) {
            index < this.currentSlide ? this.isPreviousSlide = true : this.isPreviousSlide = false;
            this.currentSlide = index;
            this.isFirstLoad = false;
        }
    }
})