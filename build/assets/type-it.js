import TypeIt from "typeit";

document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll(".type-it").forEach((element) => {
        // noinspection JSCheckFunctionSignatures
        new TypeIt(element, {
            speed: 150,
            loop: true,
            strings: element.getAttribute('data-keywords').split(', '),
            breakLines: false
        }).go();
    });
});