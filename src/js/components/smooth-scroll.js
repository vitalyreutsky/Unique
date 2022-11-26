// Подключение плавной прокрутки к якорям
import SmoothScroll from "smooth-scroll";
const scroll = new SmoothScroll('a[href*="#"]', {
  speed: 700,
  speedAsDuration: true,
  header: "[data-scroll-header]",
});
