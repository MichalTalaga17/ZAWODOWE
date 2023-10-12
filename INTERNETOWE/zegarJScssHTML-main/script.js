const sek = document.querySelector('.sek');
        const min = document.querySelector('.min');
        const godz = document.querySelector('.godz');


        function setDate() {
            var czas = new Date();
            var g = czas.getHours();
            var m = czas.getMinutes();
            var s = czas.getSeconds();

            const sekundy = ((s / 60) * 360) + 90;
            sek.style.transform = `rotate(${sekundy}deg)`;
            const minuty = ((m / 60) * 360) + ((s / 60) * 6) + 90;
            min.style.transform = `rotate(${minuty}deg)`;

            const godziny = ((g / 12) * 360) + ((m / 60) * 30) + 90;
            godz.style.transform = `rotate(${godziny}deg)`;
        }

        setInterval(setDate, 1000);

        setDate();
        function zegar_cyfrowy() {
            var czas = new Date();
            var g = czas.getHours();
            var m = czas.getMinutes();
            var s = czas.getSeconds();

            m = (m < 10) ? "0" + m : m;
            s = (s < 10) ? "0" + s : s;

            var time = g + ":" + m + ":" + s + " ";
            document.getElementById("zegar_cyfrowy").innerText = time;
            document.getElementById("zegar_cyfrowy").textContent = time;

            setTimeout(zegar_cyfrowy, 1000);

        }

        zegar_cyfrowy();