const itemFirst = document.querySelectorAll(".author-first");
const itemSecond = document.querySelectorAll(".author-second");
const itemThird = document.querySelectorAll(".author-third");
const itemFourth = document.querySelectorAll(".author-fourth");
const itemFifth = document.querySelectorAll(".author-fifth");
const itemSixth = document.querySelectorAll(".author-sixth");
const itemSeventh = document.querySelectorAll(".author-seventh");
const itemNineth = document.querySelectorAll(".author-nineth");
const itemTenth = document.querySelectorAll(".author-tenth");

const mainArr = [
  itemSecond,
  itemThird,
  itemFirst,
  itemNineth,
  itemSeventh,
  itemFourth,
  itemTenth,
  itemSixth,
  itemFifth,
];

async function func(arr) {
  for (let index = 0; index < arr.length; index++) {
    await new Promise((resolve) =>
      setTimeout(() => {
        arr[index].forEach((el) => {
          el.classList.toggle("add");
        });
        arr[index].forEach((el) => {
          el.classList.remove("addBorder");
        });

        resolve();
      }, 600)
    );
  }

  mainArr.forEach((el) => {
    el.forEach((el) => {
      el.classList.add("addBorder");
    });
  });

  setTimeout(() => {
    mainArr.forEach((el) => {
      el.forEach((el) => {
        el.classList.remove("add");
        el.classList.remove("addBorder");
      });
    });

    setTimeout(() => func(arr.reverse()), 600);
  }, 1000);
}

func(mainArr);
