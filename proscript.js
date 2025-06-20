const container = document.getElementById("container");
container.addEventListener("click", (event) => {
  const isButton = event.target.nodeName === "BUTTON";
  if (!isButton) {
    return;
  }
  event.target.focus();
});
