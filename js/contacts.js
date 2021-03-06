const center = [57.023465, 53.954361];
ymaps.ready(init);
function init() {
  // Создание карты.
  const map = new ymaps.Map("map", {
    // Координаты центра карты.
    // Порядок по умолчанию: «широта, долгота».
    // Чтобы не определять координаты центра карты вручную,
    // воспользуйтесь инструментом Определение координат.
    center: center,
    // Уровень масштабирования. Допустимые значения:
    // от 0 (весь мир) до 19.
    zoom: 17,
  });
  map.controls.remove("searchControl");
  map.controls.remove("trafficControl");
  map.controls.remove("typeSelector");
  map.controls.remove("geolocationControl");
  map.controls.remove("fullscreenControl");
  map.controls.remove("rulerControl");

  const myPlacemark = new ymaps.Placemark(
    center,
    {
      balloonContent:
        "<h3 class='text-map'>Россия, Удмуртская Республика, Воткинск,<br> улица 2-й Километр Чайковского Тракта<br> +7 (34145) 4-77-27 +7 (919) 910-75-75</h3>",
      iconCaption: "ЛамДрев",
    },
    {}
  );
  map.geoObjects.add(myPlacemark);
}
