document.addEventListener("DOMContentLoaded", () => {

  let index = 0;

  const products = [
    {
      a: "product3.html",
      img: "prod3.avif",
      title: "Buonovit D3",
      desc: "D3 vitamin drops for babies",
      rate: "rating4.5.png",

    },
    {
      a: "product5.html",
      img: "prod5.avif",
      title: "Lotus Essential Balm",
      desc: "Pain-relieving balm",
      rate: "rating5.png"
    },
    {
      a: "product4.html",
      img: "prod4.avif",
      title: "Barkleys Candy",
      desc: "Breath-freshening Candy",
      rate: "rating3.png"
    },
    {
      a: "product7.html",
      img: "prod7.avif",
      title: "Mydoct",
      desc: "Cold sore patches",
      rate: "rating4.5.png"
    },
    {
      a: "product11.html",
      img: "prod11.avif",
      title: "Brufen effect",
      desc: "Relieves pain and inflamation",
      rate: "rating5.png"
    }
  ];

  const a = document.getElementById("linku");
  const img = document.getElementById("produkt1foto");
  const title = document.querySelector("#produkt1 h2");
  const desc = document.querySelector("#produkt1 p");
  const rate = document.getElementById("rate");

  function slider() {
    a.href = products[index].a;
    img.src = products[index].img;
    title.innerText = products[index].title;
    desc.innerText = products[index].desc;
    rate.src = products[index].rate;
  }

  document.getElementById("djatht").addEventListener("click", () => {
    index++;
    if (index >= products.length) index = 0;
    slider();
  });

  document.getElementById("majt").addEventListener("click", () => {
    index--;
    if (index < 0) index = products.length - 1;
    slider();
  });

  slider();
});
