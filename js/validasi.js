document.addEventListener("DOMContentLoaded", function () {
  const form = document.querySelector(".contact-form");

  form.addEventListener("submit", function (event) {
    event.preventDefault();

    const name = form.querySelector('input[name="name"]').value.trim();
    const email = form.querySelector('input[name="email"]').value.trim();
    const phone = form.querySelector('input[name="phone"]').value.trim();
    const kritik = form.querySelector('textarea[name="kritik"]').value.trim();
    const saran = form.querySelector('textarea[name="saran"]').value.trim();

    if (!isValidName(name)) {
      alert("Nama hanya boleh mengandung huruf.");
      return;
    }
    if (!isValidEmail(email)) {
      alert("Email tidak valid.");
      return;
    }
    if (!isValidPhone(phone)) {
      alert("Nomor telepon hanya boleh mengandung angka dan minimal 10 digit.");
      return;
    }
    alert("Form berhasil dikirim!");

    function isValidName(name) {
      return /^[a-zA-Z\s]+$/.test(name);
    }

    function isValidEmail(email) {
      return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
    }

    function isValidPhone(phone) {
      return /^\d{10,}$/.test(phone);
    }
  });
});
