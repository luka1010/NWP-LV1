# NWP-LV1

class MyPDO - instancira mysql db

class DBService - sadrži funkcije koje izvršavaju queryje findAll & insert

class DiplomskiRadovi - sadrži atribute name, text, link, oib (i odgovorajuće getere i setere) te instancu baze na kojoj izvršava funkcije iz DBService klase

class DataManager - najbitnija klasa koja pomocu curl-a fetcha podatke s linka, zatim parsira podatke (pomocnim funkcijama izdvaja imena, tekst, oibe, linkove, slike i sprema ih u polja) te na kraju prolazi kroz polja podataka i pomocu instance klase DiplomskiRadovi sprema ih u bazu

class simple_html_dom_node - skinuta pomoćna klasa koja parsira podatke učitane curl-om, sadrži funkcije za traženje html elemenata kako bi lakše našli ime/oib/link rada
