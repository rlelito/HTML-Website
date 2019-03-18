/*Ustawienie wykonania działań wówczas, gdy strona jest całkowicie wczytana */
$(document).ready(function(){

	/*POBRANIE DANYCH Z BAZY*/
	$('#pobierz').click(function() { /*Zdefiniowanie zdarzenia inicjującego - kliknięcie przycisku pobierz*/
	 
		$.ajax({
			type:"GET", /*Informacja o tym, że dane będą pobierane*/
			url:"pobierz.php", /*Informacja, o tym jaki plik będzie przy tym wykorzystywany*/
			contentType:"application/json; charset=utf-8", /*Informacja o formacie transferu danych*/
			dataType:'json', /*Informacja o formacie transferu danych*/
			 
				/*Działania wykonywane w przypadku sukcesu*/
				success: function(json) { /*Funkcja zawiera parametr*/
					 
					/*Pętla typu for...in języka Javascript na danych w formacie JSON*/
					for (var klucz in json)
						{
							var wiersz = json[klucz];  /*Kolejne przebiegi pętli wstawiają nowy klucz*/     
							var name = wiersz[1];
							var email = wiersz[2];
							 
							/*Ustalenie sposobu wyświetlania pobranych danych w bloku div*/
							$("<span>Imie i nazwisko: "+name+" email: "+email+"</span>")
							.appendTo('#wykaz')
							.append("<hr>")
						} 
					 
					 
					/*Dezaktywacja na określony czas przycisku wysyłającego - ten krok można pomninąć*/
					$("#pobierz").attr("disabled", true);
					setTimeout(function(){
						$("#pobierz").attr("disabled", false); 
					}, 10000);  
				 
				},
				 
				 
				/*Działania wykonywane w przypadku błędu*/
				error: function(blad) {
					alert( "Wystąpił błąd");
					console.log(blad); /*Funkcja wyświetlająca informacje 
					o ewentualnym błędzie w konsoli przeglądarki*/
				}
			 
		});
	 
	});
 

}); /*Klamra zamykająca $(document).ready(function(){*/