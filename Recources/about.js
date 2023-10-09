//Function to load the images into the website through a json file.

function loadImages() {
    //Initial Veriables
    const slideshowContainer = document.getElementsByClassName('aboutimage');

    for (let i = 0; i < slideshowContainer.length; i++) {
        const element = slideshowContainer[i];

        //Grab image database
        fetch('Recources/images.json')
        .then(response => response.json())
        .then(images => {
            let rand = between(0, images.length);

            //This will loop through each image, and add itself to the HTML
            const img = document.createElement('img');
            img.classList.add("slideimage");

            //Define image paramaters such as file path and description
            img.src = `${images[rand].filename}`;
            img.alt = images[rand].description;

            //Add file to the HTML (Under the slideshow div element)
            element.appendChild(img);
    })

    //In the case of an error, write it to the console
    .catch(error => console.error('ERROR:', error, "CHECK JS, CSS, AND HTML"));

    }
}

function between(min, max) {  
    return Math.floor(
      Math.random() * (max - min) + min
    )
  }

//Start function
loadImages();
