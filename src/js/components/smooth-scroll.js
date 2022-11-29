// Подключение плавной прокрутки к якорям
import SmoothScroll from "smooth-scroll";
const scroll = new SmoothScroll('a[href*="#"]', {
  speed: 100,
  speedAsDuration: true,
  easing: "linear",
  header: "[data-scroll-header]",
});
