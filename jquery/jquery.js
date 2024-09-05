//? jquery is simple, fast and featured riched javascript library. It is basically implemented for removing the browser incompabilities and simplify the Html dom manipulation, eventlistner and animation.

//! syntax: $(selector).action()

// $(document).ready(function(){
//     $("P").show()
// })// for hide and show

// $(document).ready(function(){
//     $('p').click(function(){
//         $('p').hide()
//     })
// })

$("h1").click(function(){
    $(this).animate({left:'250px'},1000)
})
// $(document).ready(function(){
//     $("h1").click(function(){
//         $(this).animate({
//             left: '250px',   // Animate the left property
//             bottom: '100px'  // Animate the bottom property
//         }, 1000); // Optionally, you can add duration in milliseconds
//     });
// });

//!chaining jquery effect
// $("#box").animate({left:'250px'},3000)

//! stop operation
// $(".btn").click(function(){
//     $("#box").stop()
// })

//! chaining Operation
// $(".btn").click(function(){
//     $("#box").css("backgroundColor","red").slideUp(2000).slideDown(2000);
// })

//! callback Operation
// $(".btn").click(function(){
//     $("P").hide("slow",function(){
//         alert('All paragraph are hidden now')
//     })
// })

//! fade Operation
$(".btn").click(function(){
    $("p").fadeTo(3000,0.5)
})