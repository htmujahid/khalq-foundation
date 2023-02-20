<x-container id="container">
    <x-heading.h1 bottom>Words From our Donors</x-heading.h1>
</x-container>
<x-wrapper.multicarousel>
    <x-card.review id="first" />
    @foreach ($reviews as $review)    
        <x-card.review :review="$review" />
    @endforeach
    @foreach ($reviews as $review)    
        <x-card.review :review="$review" />
    @endforeach
    <x-card.review id="last" />
    <x-button.left id="leftCaro"/>
    <x-button.right id="rightCaro"/>
</x-wrapper.multicarousel>
<script>
    const container = document.getElementById('container');
    const firstCarousel = document.getElementById('first-courosel');
    let width = container.offsetWidth;
    let screenWidth = window.innerWidth;
    let containerWidth = screenWidth - width;
    let halfContainerWidth = containerWidth / 2;
    firstCarousel.style.width = halfContainerWidth + 'px';
    window.addEventListener('resize', () => {
        width = container.offsetWidth;
        screenWidth = window.innerWidth;
        containerWidth = screenWidth - width;
        halfContainerWidth = containerWidth / 2;
        firstCarousel.style.width = halfContainerWidth + 'px';
    });

    const carouselGroup = document.getElementById('carousel-group');
    const left = document.getElementById('leftCaro');
    const right = document.getElementById('rightCaro');
    let pressed = false;
    let startX;
    let scrollLeft;

    left.style.display = 'none';

    const children = carouselGroup.children;
    let childWidth = children[1].offsetWidth;

    if(window.innerWidth < 640) {
        childWidth = children[1].offsetWidth + 8;
    }else{
        childWidth = children[1].offsetWidth + 32;
    }

    window.addEventListener('resize', () => {
        if(window.innerWidth < 640) {
            childWidth = children[1].offsetWidth + 8;
        }else{
            childWidth = children[1].offsetWidth + 32;
        }
        right.style.display = 'block';

    });

    right.addEventListener('click', () => {
        if (Math.ceil(carouselGroup.scrollLeft) === carouselGroup.scrollWidth - carouselGroup.clientWidth) {
            right.style.display = 'none';
        }
        left.style.display = 'block';
        carouselGroup.scrollTo({
            top: 0,
            left: carouselGroup.scrollLeft + childWidth,
            behavior: 'smooth'
        })
    })

    left.addEventListener('click', () => {
        if (carouselGroup.scrollLeft === 0) {
            left.style.display = 'none';
        }
        right.style.display = 'block';
        carouselGroup.scrollTo({
            top: 0,
            left: carouselGroup.scrollLeft - childWidth,
            behavior: 'smooth'
        })
    })

    carouselGroup.addEventListener('scroll', () => {
            if (carouselGroup.scrollLeft === 0) {
                left.style.display = 'none';
            } else {
                left.style.display = 'block';
            }
            if (Math.ceil(carouselGroup.scrollLeft) === carouselGroup.scrollWidth - carouselGroup.clientWidth) {
                right.style.display = 'none';        
            } else {
                right.style.display = 'block';
            }
        }
    )


    carouselGroup.addEventListener("mousedown", (e) => {
        pressed = true;
        carouselGroup.style.cursor = "grabbing";
        startX = e.pageX - carouselGroup.offsetLeft;
        scrollLeft = carouselGroup.scrollLeft;
    });

    carouselGroup.addEventListener("mouseleave", () => {
        carouselGroup.style.cursor = "default";
        pressed = false;
    });

    carouselGroup.addEventListener("mouseup", () => {
        carouselGroup.style.cursor = "grab";
        pressed = false;
    });

    carouselGroup.addEventListener("mousemove", (e) => {
        if (!pressed) return
            e.preventDefault();
            const x = e.pageX - carouselGroup.offsetLeft;
            const walk = (x - startX);
            carouselGroup.scrollLeft = scrollLeft - walk;
    });
</script>