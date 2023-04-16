// #####################
// CONST PAGE RESSOURCES
// #####################

// Boutton : Label, Outils, Experts
const toggleButtonHomePageResssources = document.querySelector('#check')
const txtOutilsHomePageRessources = document.querySelector('.txtOutilsHomePageRessources')
const txtExpertsHomePageRessources = document.querySelector('.txtExpertsHomePageRessources')
/**/


const containerOutils = document.querySelector('.containerOutils')
const containerExperts = document.querySelector('.containerExperts')
const txtExplicatifTemplateOutils = document.querySelector('.txtExplicatifTemplateOutils')
const txtExplicatifTemplateExperts = document.querySelector('.txtExplicatifTemplateExperts')

if (toggleButtonHomePageResssources) {
    toggleButtonHomePageResssources.addEventListener('click', ()=>{
        txtOutilsHomePageRessources.classList.toggle("txtActiveToggleButton")
        txtExpertsHomePageRessources.classList.toggle("txtActiveToggleButton")
        //zoneContentIntroPageRessources.classList.toggle("margin-top-ExpertController")
        containerOutils.classList.toggle("visible")
        txtExplicatifTemplateOutils.classList.toggle("visible")

        containerExperts.classList.toggle("visible")
        txtExplicatifTemplateExperts.classList.toggle("visible")

    })
}
//////////////////////////////////////////////////////////////////////////

// #####################
// CONST PAGE ATELIERS
// #####################

// deplacement sur les 2 sections

const nextAtelier = document.querySelector('#btn-nextAtelier')
const nowAtelier = document.querySelector('#btn-nowAtelier')
const sectionAteliersAVenir = document.querySelector('.sectionAteliersÀVenir')
const sectionAteliersPresents = document.querySelector('.sectionAteliersPresents')

if (nextAtelier) {
    nextAtelier.addEventListener('click', ()=>{
        sectionAteliersAVenir.scrollIntoView({behavior: "smooth"});
    })
}
if (nowAtelier) {
    nowAtelier.addEventListener('click', ()=>{
        sectionAteliersPresents.scrollIntoView({behavior: "smooth"});
    })
}

// button charger plus Ateliers Actuel
let boutonChargement = document.querySelector('#bouton-chargementAct');
let listeElements = document.querySelector('#liste-elementsAteliersAct');
//let arrayElementCarte = document.querySelector()
if (listeElements) {
    let elements = listeElements.getElementsByTagName('a');
    let nombreElementsAffiches = 5;

    boutonChargement.addEventListener('click', function() {
        nombreElementsAffiches += 5;

        for (let i = 0; i < elements.length; i++) {
            if (i < nombreElementsAffiches) {
                elements[i].style.display = 'block';
            } else {
                elements[i].style.display = 'none';
            }
        }

        // Cacher le bouton de chargement si tous les éléments sont affichés
        if (nombreElementsAffiches >= elements.length) {
            boutonChargement.style.display = 'none';
        }
    });
}


// button charger plus Ateliers A venir
let boutonChargementNext = document.querySelector('#bouton-chargementNext');
let listeElementsNext = document.querySelector('#liste-elementsAteliersNext');
if (listeElementsNext) {
    let elementsNext = listeElementsNext.getElementsByTagName('a');
    let nombreElementsAffichesNext = 5;

    boutonChargementNext.addEventListener('click', function() {
        nombreElementsAffichesNext += 5;

        for (let i = 0; i < elementsNext.length; i++) {
            if (i < nombreElementsAffichesNext) {
                elementsNext[i].style.display = 'block';
            } else {
                elementsNext[i].style.display = 'none';
            }
        }

        // Cacher le bouton de chargement si tous les éléments sont affichés
        if (nombreElementsAffichesNext >= elementsNext.length) {
            boutonChargementNext.style.display = 'none';
        }
    });
}


// Animation Avis

const un = document.querySelector(".carteOne")
const deux = document.querySelector(".carteTwo")
const trois = document.querySelector(".carteThree")

if (un && deux && trois) {

    let idInterval

    let firstGroup = ["img/avis1.jpg","img/avis2.png","img/avis3.png"]
    let secondGroup = ["img/avis4.png","img/avis5.png","img/avis6.png"]
    let thirdGroup = ["img/avis7.png","img/avis8.jpg","img/avis9.jpg"]

    let firstNum
    let secondNum
    let thirdNum

    function randomNumberWihPic(data, option){
        if (option === 1){
            data = Math.floor(Math.random()* firstGroup.length)
        }
        else if (option === 2){
            data = Math.floor(Math.random()* secondGroup.length)
        }
        else if(option ===3){
            data = Math.floor(Math.random()*thirdGroup.length)
        }
        return data
    }

    function choosePic() {

        let one = randomNumberWihPic(firstNum,1)
        let two = randomNumberWihPic(secondNum,2)
        let three = randomNumberWihPic(thirdNum,3)


        un.style.backgroundImage = `url(${firstGroup[one]})`
        deux.style.backgroundImage = `url(${secondGroup[two]})`
        trois.style.backgroundImage = `url(${thirdGroup[three]})`
        un.classList.toggle("visible")
        deux.classList.toggle("visible")
        trois.classList.toggle("visible")

    }

    function infiniteAnimation(){
        if (!idInterval){
            setInterval(choosePic,5000)
        }
    }
}


//////////////////////////////////////////////////////////////////////////

// #####################
// CONST PAGE MC
// #####################
const txt1VersementPageMC = document.querySelector('.txt1VersementPageMC')
const txt4VersementsPageMC = document.querySelector('.txt4VersementsPageMC')
const checkMC = document.querySelector('#checkMC')
const carte1Versement = document.querySelector('#carte1Versement')
const carte4Versements = document.querySelector('#carte4Versements')

const txtAnim = document.querySelector('.changing-text')

new Typewriter(txtAnim, {
    loop : true,
    deleteSpeed : 20
})
    .changeDelay(50)
    .typeString('sans t’épuiser,')
    .pauseFor(1000)
    .deleteChars(15)
    .typeString('sans prospecter')
    .pauseFor(1000)
    .deleteChars(15)
    .typeString('et sans connaissance technique.')
    .pauseFor(1000)
    .deleteChars(31)
    .start()


if (checkMC) {
    checkMC.addEventListener('click', ()=>{
        txt1VersementPageMC.classList.toggle("txtActiveToggleButtonPageMC")
        txt4VersementsPageMC.classList.toggle("txtActiveToggleButtonPageMC")

        carte1Versement.classList.toggle("carteSelected")
        carte4Versements.classList.toggle("carteSelected")
    })
}
//////////////////////////////////////////////////////////////////////////

// #####################
// CONST PAGE Accueil
// #####################
const swiper = new Swiper('.swiper', {
    // Optional parameters
    overflow: "hidden",
    slidesPerView: "auto",
    direction: 'horizontal',
    rewind: true,


    // If we need pagination
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },


    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },


    autoplay: {
        delay: 4000,
    }

});


const txtAnimAccueil = document.querySelector('#changing-textAccueil')

new Typewriter(txtAnimAccueil, {
    loop : true,
    deleteSpeed : 20
})
    .changeDelay(50)
    .typeString('sans t’épuiser,')
    .pauseFor(1000)
    .deleteChars(15)
    .typeString('sans prospecter')
    .pauseFor(1000)
    .deleteChars(15)
    .typeString('et sans connaissance technique.')
    .pauseFor(1000)
    .deleteChars(31)
    .start()
//////////////////////////////////////////////////////////////////////////
