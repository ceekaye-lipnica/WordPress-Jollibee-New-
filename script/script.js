
// MODAL - CONTACT PAGE
const btnModal = document.querySelector("#btnModal");
const btnClose = document.querySelector("#btnClose");
const modal = document.querySelector(".modal");
if (btnModal && modal) {
  btnModal.addEventListener("click", addShowClass);
  btnClose.addEventListener("click", removeShowClass);

  function addShowClass() {
    modal.classList.add("show");
  }

  function removeShowClass() {
    modal.classList.remove("show");
  }
}
