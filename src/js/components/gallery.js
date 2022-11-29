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
  itemSixth,
  itemFirst,
  itemNineth,
  itemThird,
  itemSeventh,
  itemSecond,
  itemTenth,
  itemFourth,
  itemFifth,
];

async function func(arr) {
  for (let index = 0; index < arr.length; index++) {
    await new Promise((resolve) =>
      setTimeout(() => {
        arr[index].forEach((el) => {
          el.classList.toggle("change");
        });

        resolve();
      }, 700)
    );
  }

  setTimeout(() => func(arr.reverse()), 700);
}

func(mainArr);
