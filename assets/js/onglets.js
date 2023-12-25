window.addEventListener('DOMContentLoaded', function () {
    
    // mise en cache de tous les objets de la page HTML : Variables globales
    const art1 = document.getElementById('art1');
    const art2 = document.getElementById('art2');
    const art3 = document.getElementById('art3');
    const t1 = document.getElementById('t1');
    const t2 = document.getElementById('t2');
    const t3 = document.getElementById('t3');
    
    t1.addEventListener('click', function(){       
        art1.style.display = "block";
        art2.style.display = "none";
        art3.style.display = "none";
        t1.style.color = "rgb(140,145, 155)";
        t2.style.color = "#d3d3d3";
        t3.style.color = "#d3d3d3";
    });
    t2.addEventListener('click', function(){       
        art1.style.display = "none";
        art2.style.display = "block";
        art3.style.display = "none";
        t1.style.color = "#d3d3d3";
        t2.style.color = "rgb(140,145, 155)";
        t3.style.color = "#d3d3d3";
    });
    t3.addEventListener('click', function(){       
        art1.style.display = "none";
        art2.style.display = "none";
        art3.style.display = "block";
        t1.style.color = "#d3d3d3";
        t2.style.color = "#d3d3d3";
        t3.style.color = "rgb(140,145, 155)";
    });
});