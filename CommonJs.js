var checkTimeline = anime.timeline({ autoplay: true, direction: 'alternate', loop: false });checkTimeline
  .add({
    targets: '.checkmark',
    scale: [
      { value: [0, 1], duration: 1000, easing: 'easeInOutElastic',
      autoplay: false,
    loop: false

    
     }
    ],
    autoplay: false,
    loop: false
  })