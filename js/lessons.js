const lessonsArray =
{
    "example": [1000, "Example Subject", 100, 5, "Example Location", "Example Image"],
    "maths": [1001, "Maths", 100, 5, "London", "Example Image"],
    "english": [1002, "English", 100, 5, "London", "Example Image"],
    "french": [1003, "French", 100, 5, "London", "Example Image"],
    "spanish": [1004, "Spanish", 100, 5, "London", "Example Image"],
    "example": [1005, "Example Subject", 100, 5, "Example Location", "Example Image"],
    "example": [1006, "Example Subject", 100, 5, "Example Location", "Example Image"],
    "example": [1007, "Example Subject", 100, 5, "Example Location", "Example Image"],
    "example": [1008, "Example Subject", 100, 5, "Example Location", "Example Image"],
    "example": [1009, "Example Subject", 100, 5, "Example Location", "Example Image"],
    "example": [1010, "Example Subject", 100, 5, "Example Location", "Example Image"],
};

const lessons = JSON.parse(lessonsArray);

// TODO: turn this into vue function
document.getElementById("example-id").innerHTML = lessons.example[0];
document.getElementById("example-subject").innerHTML = lessons.example[1];
document.getElementById("example-price").innerHTML = lessons.example[2];
document.getElementById("example-spaces").innerHTML = lessons.example[3];
document.getElementById("example-location").innerHTML = lessons.example[4];
document.getElementById("example-image").innerHTML = lessons.example[5];