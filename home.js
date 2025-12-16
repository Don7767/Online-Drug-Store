document.addEventListener("DOMContentLoaded", () => {

  let index = 0;

  const products = [
    {
      img: "prod3.avif",
      title: "Buonovit D3",
      desc: "D3 vitamin drops for babies",
      rate: "rating4.5.png"
    },
    {
      img: "prod5.avif",
      title: "Lotus Essential Balm",
      desc: "Pain-relieving balm",
      rate: "rating5.png"
    },
  ];

  const img = document.getElementById("produkt1foto");
  const title = document.querySelector("#produkt1 h2");
  const desc = document.querySelector("#produkt1 p");
  const rate = document.getElementById("rate")

  function showSlide() {
    img.src = products[index].img;
    title.innerText = products[index].title;
    desc.innerText = products[index].desc;
    rate.src = products[index].rate
  }

  document.getElementById("djatht").addEventListener("click", () => {
    index++;
    if (index >= products.length) index = 0;
    showSlide();
  });

  document.getElementById("majt").addEventListener("click", () => {
    index--;
    if (index < 0) index = products.length - 1;
    showSlide();
  });

  showSlide();
});
