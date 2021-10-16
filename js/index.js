// function LayerMouseOut(e){
//     let allPTags = e.currentTarget.children;
//     allPTags[0].style.opacity = "0.4";
//     allPTags[1].style.opacity = "0.4";
// }
// function LayerMouseIn(e){
//     let allPTags = e.currentTarget.children;
//     allPTags[0].style.color = "white";
//     allPTags[1].style.backgroundColor = "white";
// }
// function layerFunction(){
//     let layer = document.querySelectorAll(".layer");
//     for(let i=0; i<layer.length; i++){
//         layer[i].addEventListener("mouseenter", LayerMouseIn);
//         layer[i].addEventListener("mouseout", LayerMouseOut);

//         let allPTags = layer[i].children;
//         allPTags[0].addEventListener("mouseenter", function(e){
//             e.style.opacity = "1";
//         });

//         allPTags[1].addEventListener("mouseenter", function(e){
//             console.log(e.currentTarget);
//             e.currentTarget.style.opacity = "1";
//         });

//     }
// }
// layerFunction();