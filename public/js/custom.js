/*
    name: app.js
    description: This file is the main entry point for the application.
    created: 2022-02-26
    original author: Tawhid Jony
*/

const sunIcon = document.getElementById("sun");
const moonIcon = document.getElementById("moon");
const html = document.querySelector("html");

const userTheme = localStorage.getItem("theme");
const systemTheme = window.matchMedia("(prefers-color-scheme: dark)").matches;

// icon toggle
const iconToggle = () => {
    moonIcon.classList.toggle("hidden");
    sunIcon.classList.toggle("hidden");
};

// initial theme check
const themeCheck = () => {
    if (userTheme === "dark" || (!userTheme && systemTheme)) {
        html.classList.add("dark");
        moonIcon.classList.add("hidden");
        return;
    }
    sunIcon.classList.add("hidden");
};

// Manual theme themeSwitch
const themeSwitch = () => {
    if (html.classList.contains("dark")) {
        html.classList.remove("dark");
        localStorage.setItem("theme", "light");
        iconToggle();
        return;
    }
    html.classList.add("dark");
    localStorage.setItem("theme", "dark");
    iconToggle();
};

// call theme switch on load
sunIcon.addEventListener("click", () => {
    themeSwitch();
});
moonIcon.addEventListener("click", () => {
    themeSwitch();
});

// call theme check on load
themeCheck();
