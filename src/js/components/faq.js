const accordionHeader = document.querySelectorAll(".accordion__header");

accordionHeader.forEach((accordionHeader) => {
  accordionHeader.addEventListener("click", () => {
    const currentlyActiveAccordionHeader = document.querySelector(
      ".accordion__header.active"
    );
    if (
      currentlyActiveAccordionHeader &&
      currentlyActiveAccordionHeader !== accordionHeader
    ) {
      currentlyActiveAccordionHeader.classList.toggle("active");
      currentlyActiveAccordionHeader.nextElementSibling.style.maxHeight = 0;
    }

    accordionHeader.classList.toggle("active");
    const accordionBody = accordionHeader.nextElementSibling;
    if (accordionHeader.classList.contains("active")) {
      accordionBody.style.maxHeight = accordionBody.scrollHeight + "px";
    } else {
      accordionBody.style.maxHeight = 0;
    }
  });
});
