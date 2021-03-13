const express = require("express");
const router = express.Router();

router.get("/", (req, res) => {
  res.render("home");
});

router.get("/signup", (req, res) => {
  res.render("masterSignup");
});

router.get("/login", (req, res) => {
  res.render("masterLogin");
});

router.get("/contact", (req, res) => {
  res.render("contact");
});

router.get("/dashboard", (req, res) => {
  res.render("showPasswords");
});

router.get("/generate", (req, res) => {
  res.render("generatePasswords");
});
router.get("/display", (req, res) => {
  res.render("displayPasswords");
});
module.exports = router;
