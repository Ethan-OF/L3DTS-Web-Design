//Initial Veriables
let slideIndex = 0;
const slideshowContainer = document.getElementById('slideshow');
var interval;

//Function to load the images into the website through a json file.
function loadImages() {
    let i = 0;

    //Grab image database
    fetch('Recources/images.json')
        .then(response => response.json())
        .then(images => {
            images.forEach(image => {
                //This will loop through each image, and add itself to the HTML
                const img = document.createElement('img');
                img.classList.add("slideimage");

                //Define image paramaters such as file path and description
                img.src = `${image.filename}`;
                img.alt = image.description;
                
                //To prevent visual issues, hide every image except for the first one in the list
                i++;
                if (i == images.length) img.style.display = 'none';
                
                img.addEventListener('click', () => {
                    //Grab the images
                    const slides = document.getElementsByClassName('slideimage');

                    changeImg(slides)
                    clearInterval(interval)
                    
                    //Start loop
                    interval = setInterval(() => {
                        //Call to change image shown
                        changeImg(slides);
                    }, 5000); //Loop of 10 seconds
                });

                //Add file to the HTML (Under the slideshow div element)
                slideshowContainer.appendChild(img);
            });
        })

        //In the case of an error, write it to the console
        .catch(error => console.error('ERROR:', error, "CHECK JS, CSS, AND HTML"));

    //Start looping through slides
    const slides = document.getElementsByClassName('slideimage');

    //Start loop
    interval = setInterval(() => {
        //Call to change image shown
        changeImg(slides);
    }, 5000); //Loop of 10 seconds
}

// Function to change the image
function changeImg(slides) {

    //Some code inspired by a thread on google, I don't recall the source at this stage

    //Hide current slide
    slides[slideIndex].style.display = 'none';

    //Move index forward, and loop back if it's over the slide count
    slideIndex = (slideIndex + 1) % slides.length;

    //Display current slide (New image)
    slides[slideIndex].style.display = 'block';
}

// Function to listen for the browser loading, to start back from the first image
window.addEventListener('load', () => {
    //Reset index
    slideIndex = 0;
});

//Start functions
loadImages();
