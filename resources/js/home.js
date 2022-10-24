/* When the user scrolls down, hide the navbar. When the user scrolls up, show the navbar */
var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
    var currentScrollPos = window.pageYOffset;
    if (prevScrollpos > currentScrollPos) {
        document.getElementById("navbar").style.top = "0";
    } else {
        document.getElementById("navbar").style.top = "-130px";
    }
    prevScrollpos = currentScrollPos;
}
/**paginate card grid*/
var cards = document.querySelectorAll('.card');
var currentPage = 0;
var cardsPerPage = 3;
var totalPages = Math.ceil(cards.length / cardsPerPage);
var pagination = document.querySelector('.pagination');
var paginationDots = '';
for (var i = 0; i < totalPages; i++) {
    paginationDots += '<span class="pagination-dot"></span>';
}
pagination.innerHTML = paginationDots;
pagination.querySelector('.pagination-dot').classList.add('active');
var paginationDots = document.querySelectorAll('.pagination-dot');
paginationDots.forEach(function(dot, index) {
    dot.addEventListener('click', function() {
        paginationDots.forEach(function(dot) {
            dot.classList.remove('active');
        });
        this.classList.add('active');
        currentPage = index;
        showPage(currentPage);
    });
}
);
function showPage(page) {
    var cards = document.querySelectorAll('.card');
    var cardsPerPage = 3;
    var firstCard = page * cardsPerPage;
    var lastCard = firstCard + cardsPerPage;
    cards.forEach(function(card) {
        card.classList.add('d-none');
    });
    for (var i = firstCard; i < lastCard; i++) {
        cards[i].classList.remove('d-none');
    }
}
showPage(currentPage);
/**/
