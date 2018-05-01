<?php

use Illuminate\Database\Seeder;
use App\UserDetail;

class UserDetailsTableSeeder extends Seeder
{
    public function run()
    {
        $userDetails = [
            [5,4,'Ronan','Eleanor','Matthews','M','convallis@eu.edu','1-100-601-3612','1-626-890-5075','843-6835 Varius Rd.','Mobile','AL','18704','USA','1998-05-24','lorem, luctus ut, pellentesque','Y66282','RuK1g50wMu'],
            [4,2,'Gannon','Jeremy','Stewart','M','lobortis@sollicitudinadipiscing.net','1-696-595-8828','1-264-813-5385','P.O. Box 564, 8277 Lacus. St.','Baton Rouge','LA','48796','USA','2000-10-12','varius orci, in','C82661','DzP7g77aYk'],
            [3,1,'Otto','Kaseem','Beard','M','tempus.lorem@vulputate.org','1-769-860-7356','1-424-668-3311','787-3134 Habitant Ave','Cleveland','OH','67153','USA','1997-10-09','risus. Nulla eget','A09233','ByY7n98zBu'],
            [1,3,'Drake','Lane','Hawkins','M','nisl.Nulla@aliquamerosturpis.net','1-229-354-7322','1-130-165-1868','413-6423 Iaculis St.','Sandy','UT','85171','USA','2000-09-05','ut aliquam iaculis,','H31540','PgF0l76vSc'],
            [5,1,'Linus','Jamalia','Klein','M','mi@iaculislacus.edu','1-401-656-1654','1-655-230-7448','587-399 Venenatis Ave','Athens','GA','38933','USA','1999-08-27','ipsum cursus','L54872','DpH7j80dDh'],
            [5,4,'Jerry','Aladdin','Downs','M','Sed.pharetra@sem.ca','1-476-711-9631','1-893-101-9246','P.O. Box 736, 5322 Porttitor Avenue','South Burlington','VT','23762','USA','1997-06-29','quis, tristique ac, eleifend','A11357','AbC7b45mMp'],
            [1,3,'Damian','Malachi','Hurley','M','urna.convallis.erat@feugiattelluslorem.com','1-755-599-1420','1-820-612-4853','Ap #589-7919 Arcu. Rd.','Laramie','WY','85975','USA','1999-02-04','tortor at risus. Nunc','A80223','XxO6i28pPm'],
            [2,1,'Sylvester','Lars','Barry','M','ut.ipsum.ac@eratnequenon.org','1-776-423-4585','1-851-159-5067','Ap #780-1004 Mauris Road','San Francisco','CA','69797','USA','2000-06-24','quam, elementum','L05844','AkB3r03rAm'],
            [4,3,'Drake','Anika','Ayala','M','non@liberoettristique.net','1-281-188-8657','1-258-231-9378','398 Non, Road','Little Rock','AR','78535','USA','2000-07-20','rutrum. Fusce','H10114','JtO2m36gCp'],
            [4,2,'Kato','September','Figueroa','M','congue@justofaucibus.com','1-604-759-5846','1-429-881-4703','P.O. Box 979, 1207 Penatibus Rd.','Norman','OK','94780','USA','1999-01-18','ligula. Aenean gravida','R38837','MkJ0r58cLi'],
            [5,4,'Keane','Illana','Allen','M','tempor.erat.neque@suscipit.edu','1-239-706-9929','1-222-154-7672','684-1347 Donec Ave','Eugene','OR','99614','USA','2001-01-18','Maecenas ornare','C64732','ToY0p93oXn'],
            [3,3,'Drake','Samuel','Pierce','M','risus.at.fringilla@quisarcuvel.co.uk','1-907-350-2648','1-443-132-9021','396-9744 Pharetra. Ave','Springfield','IL','68141','USA','1999-08-21','orci sem','C98704','KwU7x49kRg'],
            [4,1,'Tyrone','Arden','Woodward','M','rutrum.Fusce@etlacinia.ca','1-110-174-1077','1-699-689-9071','P.O. Box 319, 7499 Dictum St.','Jonesboro','AR','00852','USA','1997-05-09','vulputate','T27100','EgC8n82eVl'],
            [1,1,'Rogan','Bell','Dixon','M','eu@arcuCurabitur.org','1-115-290-2213','1-724-881-8234','Ap #682-3215 Dictum Avenue','Auburn','ME','40543','USA','2000-11-22','lectus','P09197','LcF9q10yNe'],
            [5,4,'Yardley','Emery','Turner','M','pede.ultrices.a@lorem.net','1-326-773-1312','1-587-804-4744','Ap #853-6420 In Rd.','Huntsville','AL','41795','USA','2001-08-08','mauris','S04614','TnC7w85vFf'],
            [3,4,'Kadeem','Melissa','Weaver','M','nulla@porttitor.org','1-223-137-5718','1-717-803-7946','P.O. Box 887, 8873 Pellentesque St.','Rockville','MD','23435','USA','1997-10-25','adipiscing lobortis','R26629','GrS2r44pJf'],
            [2,4,'Beck','Gary','Saunders','M','sed.dui@Sedeget.com','1-338-521-9778','1-791-392-7992','186-6156 Vitae, Rd.','Chicago','IL','83828','USA','2001-04-30','diam','T59759','JoM0q86xRu'],
            [3,2,'Tanner','Dana','Neal','M','mi.Aliquam.gravida@elitAliquam.co.uk','1-182-189-0110','1-477-926-1590','247-7133 Sapien Avenue','Omaha','NE','06420','USA','1997-04-16','sagittis semper. Nam tempor','N36283','DhL7u57cOl'],
            [4,2,'Thaddeus','Angelica','Holmes','M','sodales.Mauris.blandit@ametornarelectus.com','1-389-931-4309','1-517-334-8611','7478 A, Road','Springfield','IL','12372','USA','2001-06-13','massa lobortis ultrices.','B71673','VuZ2h03hKv'],
            [3,1,'Eaton','Dahlia','Johnston','M','urna.justo.faucibus@nisl.edu','1-521-937-2721','1-901-709-5412','4418 Id Rd.','Columbus','GA','80611','USA','2001-02-27','nisl. Nulla eu','B59588','QqY7s36sVh'],
            [2,4,'Linus','Eugenia','Barrett','M','lorem@gravidanon.edu','1-182-236-1380','1-708-497-0273','Ap #877-541 Eget, Rd.','Iowa City','IA','62853','USA','1999-04-25','facilisis, magna','Z48298','DaC3q72lDh'],
            [2,1,'Ciaran','Perry','Rowe','M','Nullam.nisl.Maecenas@dis.ca','1-350-884-0662','1-286-497-6932','P.O. Box 199, 5757 Venenatis Av.','Metairie','LA','69401','USA','2002-01-13','ante dictum mi, ac','V06377','BfM1e21uKw'],
            [4,4,'Raymond','Ivan','Herman','M','ultrices.Vivamus@mattissemperdui.net','1-926-779-5517','1-665-477-0179','P.O. Box 876, 647 Et Road','Columbia','MD','78184','USA','1999-02-27','Nunc sollicitudin commodo ipsum.','X12136','WzX0g60lLr'],
            [3,3,'Jason','Bert','Blankenship','M','nulla@necante.net','1-689-171-6631','1-902-558-7954','Ap #563-3195 Turpis Street','Seattle','WA','80738','USA','1999-06-14','risus. Morbi metus. Vivamus','B76708','TeC9y54eFf'],
            [2,4,'Jackson','Roanna','Rios','M','sapien.gravida.non@quis.ca','1-658-688-6955','1-688-285-1672','399-9484 Purus. Street','Flint','MI','28998','USA','2000-10-02','malesuada fames ac turpis','C02517','VvB0e56tAj'],
            [2,2,'Steel','Troy','Avila','M','convallis@volutpat.net','1-238-419-4943','1-873-147-7184','2659 Donec Ave','Chattanooga','TN','36972','USA','1999-02-20','Sed nec metus facilisis','R40169','PiR0u15pJx'],
            [1,4,'Hammett','Sharon','Nieves','M','vulputate.eu@dolor.edu','1-666-244-8940','1-767-438-6165','P.O. Box 349, 6491 Pede St.','Joliet','IL','46708','USA','2000-03-01','a ultricies adipiscing, enim','O35148','OhJ0s82fQu'],
            [3,10,'Scott','Zia','Roach','M','pede.ac@molestiedapibusligula.net','1-737-872-2101','1-350-172-4827','Ap #720-8779 Neque Ave','Juneau','AK','86904','USA','2001-05-14','ipsum. Suspendisse non','V53149','JbF6u04bKp'],
            [5,4,'Keith','Nathan','Daniel','M','vel.arcu@ametfaucibusut.edu','1-910-266-3532','1-628-731-7620','782-2570 Elit, Rd.','Carson City','NV','36611','USA','2001-07-29','sit amet ultricies','U73005','RdW2i33pIq'],
            [5,1,'Leroy','Thomas','Cochran','M','justo@diamPellentesquehabitant.net','1-352-929-5409','1-428-467-6858','1835 Fringilla. Rd.','Portland','ME','66280','USA','2000-03-30','sem','K95826','CrE8n26jBx'],
            [4,3,'Branden','Hollee','Villarreal','M','est.Mauris.eu@est.ca','1-616-698-1346','1-175-521-7611','5322 Velit St.','Los Angeles','CA','80911','USA','1999-07-01','tincidunt. Donec vitae erat','R40813','LzJ2c64kFz'],
            [5,2,'Conan','Noelle','Frank','M','rhoncus.Proin.nisl@quamquisdiam.co.uk','1-877-273-4192','1-294-205-9989','5723 Etiam Avenue','Hartford','CT','66493','USA','1998-03-24','condimentum. Donec at','G13523','YrY7i75eRm'],
            [3,1,'Perry','Blaine','Oneil','M','pede.Praesent@facilisis.co.uk','1-443-361-6001','1-487-668-2356','414-6394 Nonummy Street','Milwaukee','WI','02588','USA','1999-05-29','eget','F17405','KuA9o50rNe'],
            [2,1,'Rudyard','Price','Watkins','M','magna.a.tortor@morbi.com','1-354-439-9163','1-298-670-5195','184 Id Rd.','Lafayette','LA','01306','USA','2000-09-17','et magnis dis','G97815','VcR6l15vFj'],
            [2,1,'Dalton','Ashely','Cain','M','purus.gravida@at.net','1-274-469-8241','1-657-122-2417','961-930 Nec, Avenue','Springfield','MO','67648','USA','1997-04-03','erat. Sed','Y04462','ErP2t15rNm'],
            [5,10,'Derek','Dane','Fox','M','Fusce@Proinnislsem.com','1-696-607-1991','1-175-686-3355','P.O. Box 836, 6702 Eu Av.','Akron','OH','88918','USA','1999-11-14','ante lectus convallis est,','O68247','EfM1s09gMd'],
            [1,3,'Edan','Merritt','Randolph','M','orci@ac.edu','1-121-602-9877','1-515-548-4240','202-2774 Arcu. St.','Detroit','MI','81031','USA','1999-07-15','eget nisi dictum augue','C80602','UxR9g81wLh'],
            [3,2,'Vance','Odysseus','Carpenter','M','Donec@ametorciUt.ca','1-263-338-5775','1-646-427-5211','P.O. Box 246, 4983 Rhoncus. Av.','Meridian','ID','51366','USA','1998-03-15','odio','J29581','EqH2v25yEu'],
            [2,1,'Dean','Kelly','Cantu','M','eu.odio.Phasellus@Morbiquis.edu','1-852-811-5254','1-878-189-8095','Ap #714-7256 Ornare, Road','Louisville','KY','18193','USA','2000-10-25','commodo auctor','G93311','QaE0o82tLx'],
            [1,4,'Amery','Colby','Vance','M','sit.amet@purusmaurisa.ca','1-254-328-6021','1-648-680-2313','861 Erat. Av.','Salt Lake City','UT','70982','USA','2000-06-04','faucibus. Morbi vehicula.','Y58784','XoQ0r52bLe'],
            [2,3,'Gage','Garth','Russell','M','ipsum.primis.in@pedesagittis.net','1-811-835-7559','1-382-516-0020','471-5595 Feugiat Av.','Pocatello','ID','58187','USA','1999-06-11','sem. Nulla interdum.','F15867','IyX2p96oCv'],
            [4,3,'Tucker','Keefe','Brooks','M','purus.accumsan.interdum@Vestibulumaccumsan.edu','1-510-275-9479','1-114-297-1467','151-9985 Mauris Avenue','Jefferson City','MO','65582','USA','1997-05-14','tristique ac, eleifend','A00413','XlC6j40kNi'],
            [2,2,'Colby','Urielle','Mccarty','M','nascetur.ridiculus.mus@uterat.ca','1-784-859-6083','1-430-679-4660','9598 Fringilla Ave','Fresno','CA','74676','USA','2001-10-04','sollicitudin a, malesuada','B68388','VcN6a79bTy'],
            [3,4,'Ishmael','Eleanor','Mcconnell','M','Quisque.imperdiet.erat@sedtortorInteger.edu','1-321-224-8116','1-121-416-7275','1701 Nec Street','Tuscaloosa','AL','32009','USA','2000-03-17','rhoncus id, mollis','U52354','PlB2e41yTy'],
            [4,4,'Armand','Quyn','Herrera','M','Fusce.mi@Morbivehicula.edu','1-967-680-2666','1-347-525-2479','6528 Vitae Road','Hartford','CT','74334','USA','2000-03-10','quis lectus. Nullam','Q09825','QrU4b13aKf'],
            [1,1,'Hilel','Armando','Whitaker','M','euismod.urna.Nullam@sodalespurusin.ca','1-727-504-6706','1-711-275-1875','P.O. Box 527, 1728 Eu Street','Montgomery','AL','46715','USA','2000-03-19','scelerisque dui. Suspendisse','S77703','MhG0r36wGs'],
            [3,1,'Dieter','Brittany','Lancaster','M','justo.Praesent@purusaccumsan.co.uk','1-172-645-5215','1-288-280-7035','P.O. Box 885, 9545 Netus Avenue','New Orleans','LA','67936','USA','1999-01-26','neque. Nullam nisl.','F48562','QkJ9u82dIi'],
            [3,4,'Marvin','Hilel','Wilder','M','Duis.dignissim@antedictum.com','1-872-478-8984','1-588-355-8365','1364 Blandit. Av.','Springdale','AR','66544','USA','2002-01-15','interdum. Curabitur','Z05533','AfQ8h23tFj'],
            [2,3,'Brody','Abbot','Boyer','M','Nullam.scelerisque.neque@nisiCumsociis.org','1-521-878-0601','1-365-100-2632','166-1785 Vel Rd.','Bridgeport','CT','15987','USA','1998-08-05','felis.','L42753','ZvH6t84rNx'],
            [2,3,'Stephen','Channing','Avery','M','Nulla.facilisi@rutrummagnaCras.ca','1-149-765-8476','1-340-514-1363','6619 Duis Av.','Madison','WI','67077','USA','2000-03-24','sit','M52765','VrM7m40cIn'],
            [2,4,'Ruby','Theodore','Emerson','F','Nunc.ut@Donecdignissim.com','1-725-876-3001','1-546-162-5329','1133 Elit Street','Hartford','CT','71467','USA','2001-09-13','risus, at fringilla purus','J86998','DxT0t76mGv'],
            [2,1,'Jaime','Upton','Vincent','F','dolor.nonummy@cubiliaCurae.co.uk','1-797-460-5768','1-610-705-7662','P.O. Box 954, 8670 Morbi Avenue','Biloxi','MS','20038','USA','2000-11-06','justo nec ante. Maecenas','D83235','ChE3a19bNp'],
            [1,3,'Indira','Signe','Matthews','F','Integer@torquent.com','1-320-567-2500','1-142-453-0091','794-5313 Ante Avenue','Carson City','NV','10300','USA','2001-04-12','non','B90414','QiP1p28uXq'],
            [1,2,'Jorden','Rowan','Madden','F','cubilia@augueeu.com','1-482-769-4051','1-288-553-1561','P.O. Box 707, 5903 Donec St.','Waterbury','CT','91895','USA','2001-05-28','rutrum non, hendrerit id,','I80955','VjE7h29mVm'],
            [2,1,'Deanna','Jena','Waller','F','facilisis@Nunc.com','1-278-581-7697','1-484-386-2317','982-4884 Cum Street','Kailua','HI','43162','USA','1997-12-09','nunc id enim. Curabitur','A38472','KoQ1g83lTf'],
            [2,1,'Miranda','Harrison','Hines','F','arcu.Vestibulum@molestie.org','1-992-614-7712','1-288-626-8207','Ap #837-9343 Egestas. St.','Warren','MI','18042','USA','1998-09-05','Aenean euismod mauris','R09744','ZzR6d70wMv'],
            [2,2,'Sigourney','Austin','Martin','F','quis.turpis@tellusSuspendissesed.net','1-818-385-6887','1-944-873-2679','Ap #326-8367 Rutrum St.','Evansville','IN','02751','USA','2001-02-11','tincidunt orci quis','J54031','YkP2k75mKi'],
            [5,3,'Shellie','Lewis','Bell','F','Sed@vulputatemaurissagittis.ca','1-679-936-7444','1-159-866-4572','4198 Mauris St.','San Jose','CA','84419','USA','1998-09-30','Etiam ligula tortor, dictum','D23249','AcT0u58pIp'],
            [5,1,'Karen','Patricia','Rodriguez','F','pretium@interdum.com','1-715-283-3108','1-321-584-1887','753-3909 Gravida. Road','Dallas','TX','86659','USA','2001-05-11','Nulla','E60558','SnC4r95kHy'],
            [5,1,'Rhona','Justine','Bright','F','in.aliquet.lobortis@vestibulumMauris.com','1-908-919-7279','1-939-472-3880','P.O. Box 156, 9020 Pellentesque Avenue','Green Bay','WI','76186','USA','1998-04-08','et tristique pellentesque,','B85804','AwG7q94mFr'],
            [2,4,'Bryar','Colby','Espinoza','F','id.sapien@odiotristiquepharetra.co.uk','1-893-688-4834','1-164-483-3022','P.O. Box 732, 515 Nunc Rd.','Erie','PA','70001','USA','1998-02-17','Vivamus sit amet risus.','C07638','GtB1a34yQl'],
            [4,1,'Latifah','Elton','Camacho','F','aliquet.libero.Integer@Lorem.ca','1-418-727-5562','1-478-952-7010','Ap #996-1451 Elementum Street','Rock Springs','WY','72992','USA','1997-07-11','libero.','X40501','LbF9v61kTf'],
            [5,2,'Irene','Jessica','Dennis','F','elit@ametfaucibusut.ca','1-374-709-3548','1-858-184-7074','331-3666 Blandit. Rd.','Pocatello','ID','10604','USA','1997-05-17','vestibulum lorem, sit amet','P33407','OoT4f34iFa'],
            [3,3,'Guinevere','Willow','Murphy','F','urna.convallis@tempuslorem.co.uk','1-153-731-0158','1-766-183-6916','Ap #128-6073 Amet Road','Omaha','NE','48086','USA','2000-04-08','magna. Nam ligula','I89704','OkM5h02cLo'],
            [4,1,'Sopoline','Laura','Jennings','F','consequat@consequatnecmollis.edu','1-293-766-0176','1-651-127-1823','Ap #191-472 Neque Street','Gresham','OR','55513','USA','2002-02-26','primis in','P80063','TmX9n73pQb'],
            [4,4,'Wynter','Yuli','Hayden','F','amet.metus.Aliquam@ipsumSuspendisse.net','1-736-817-6734','1-361-104-2738','P.O. Box 245, 3631 Faucibus. Rd.','Vancouver','WA','66850','USA','2000-03-10','ut ipsum ac mi','A55935','GjB3r14kAm'],
            [2,2,'Naomi','Macey','Rogers','F','Fusce@ipsumDonec.com','1-387-691-9841','1-560-618-5545','1993 Sit Rd.','Fort Smith','AR','82516','USA','1998-09-29','vel, vulputate eu,','T91197','MmR2y08bDo'],
            [5,10,'Xantha','Leslie','Browning','F','arcu.Morbi.sit@vulputateeuodio.edu','1-861-872-2929','1-515-962-1859','P.O. Box 847, 7984 Praesent St.','Fayetteville','AR','39241','USA','2001-04-05','sollicitudin adipiscing ligula. Aenean','F11616','QmJ1e23uOq'],
            [3,1,'Adena','Abraham','Torres','F','orci.sem@euaccumsansed.co.uk','1-300-438-2932','1-606-413-5093','818 Sollicitudin St.','Nashville','TN','53724','USA','1999-07-27','vulputate dui,','S05276','XhQ0u04oFb'],
            [3,1,'Jaden','Alvin','West','F','id.magna@velitQuisquevarius.edu','1-949-475-7289','1-473-571-7242','4116 Eu St.','North Las Vegas','NV','45232','USA','1999-04-07','at auctor ullamcorper,','S50898','KwI8j14lNd'],
            [5,1,'Jemima','Oren','Dunn','F','sem.consequat@facilisis.co.uk','1-716-409-9235','1-752-758-2413','117-3412 Blandit Ave','Fresno','CA','56284','USA','1997-07-07','gravida. Praesent eu nulla','W92294','ZcJ0s85eRf'],
            [5,1,'Lara','Joel','Castillo','F','a@malesuadaaugueut.net','1-383-473-4569','1-385-577-8014','Ap #742-6315 Nunc St.','Joliet','IL','73282','USA','1998-11-27','Nulla','K73648','IrX4o57vLu'],
            [5,1,'Melinda','Colorado','Robertson','F','dui.lectus.rutrum@tortor.com','1-883-759-3377','1-531-807-7570','2290 Sed Ave','Denver','CO','77825','USA','1999-12-26','Cras vehicula','T25212','SlC9l38iXp'],
            [5,4,'Wynter','Summer','Valenzuela','F','et.nunc@natoquepenatibuset.co.uk','1-658-189-6986','1-302-362-4834','P.O. Box 952, 5886 Elit Rd.','Sandy','UT','35191','USA','1998-12-08','fermentum metus. Aenean','R11723','CuT9m92sVd'],
            [3,3,'Kerry','Kasper','Bray','F','ullamcorper@id.co.uk','1-164-246-3172','1-278-174-5907','Ap #335-4192 Natoque St.','Bozeman','MT','33853','USA','1998-06-04','iaculis, lacus pede','J61422','FsU2c70nYv'],
            [4,1,'Wynne','Marsden','Wood','F','non@Mauris.org','1-155-838-9989','1-958-350-0342','Ap #181-3534 Vulputate Road','Kearney','NE','78809','USA','2000-11-17','quis, pede. Suspendisse','K67486','VlC3k53jOl'],
            [3,2,'Molly','Reed','Poole','F','vel.sapien@quisturpis.net','1-761-528-1761','1-659-719-6893','P.O. Box 391, 1549 In St.','Fayetteville','AR','31407','USA','1997-06-02','Proin vel arcu eu','Y68492','QbK3b83tTm'],
            [2,10,'Keelie','Alika','Wise','F','amet.risus.Donec@maurisIntegersem.edu','1-271-283-6036','1-958-312-9197','589-8998 Risus. Av.','Tulsa','OK','26261','USA','2000-12-15','egestas','Q47218','CkV4k71sOr'],
            [5,1,'Imani','Vance','Salinas','F','magna.Nam@et.org','1-489-791-7494','1-363-316-7289','Ap #366-6906 In Av.','Baton Rouge','LA','67103','USA','1998-05-21','augue ut lacus.','N74679','RgY9p04wOm'],
            [5,3,'Georgia','Ariel','Waters','F','non.magna@malesuadafamesac.co.uk','1-265-858-0270','1-108-500-2630','Ap #653-2888 Mi Rd.','Tulsa','OK','67525','USA','1999-12-04','malesuada','P29468','OrN0u96oTw'],
            [5,3,'Ignacia','Rhiannon','Mcguire','F','sed.orci.lobortis@neccursus.co.uk','1-108-948-6666','1-391-868-3952','P.O. Box 414, 1076 Faucibus Av.','Colorado Springs','CO','42720','USA','2000-01-03','libero','D00586','FvH7o72aTv'],
            [4,4,'Ella','Justine','Park','F','ac.mattis@leoCras.ca','1-515-332-4456','1-869-949-9809','977-2523 Nisi Av.','Lakewood','CO','65673','USA','2000-04-06','sagittis','Q22762','RlT8l34wKy'],
            [1,1,'Germaine','Rafael','Hoffman','F','Vestibulum.ante.ipsum@est.edu','1-190-797-9595','1-880-644-2128','372-529 Dignissim. Rd.','Aurora','IL','65362','USA','2001-10-02','dictum eu,','C70964','KrN2y19jUu'],
            [1,2,'Tara','Ferdinand','Conner','F','condimentum.Donec@sagittis.org','1-756-747-2215','1-185-304-1854','P.O. Box 708, 7265 Donec St.','Lincoln','NE','97182','USA','1999-08-28','faucibus ut, nulla. Cras','H26269','PhO0t12tFr'],
            [3,1,'Isabelle','Jasmine','Hughes','F','ipsum@Proin.ca','1-174-805-1534','1-452-976-1431','P.O. Box 968, 7450 Rutrum Av.','Des Moines','IA','85602','USA','1997-04-05','eget','Y93956','RoQ1z99gUn'],
            [2,1,'Kaitlin','Matthew','Waters','F','eleifend.nec@vitaedolor.ca','1-515-125-9943','1-193-282-3472','3457 Vitae Road','Jefferson City','MO','15869','USA','1998-03-16','magna. Praesent','X59484','MvH9e67rLq'],
            [5,4,'Bertha','Logan','Dixon','F','eu.eros@idlibero.co.uk','1-507-542-2487','1-645-727-0549','P.O. Box 587, 3450 Quam. Rd.','Bellevue','NE','25116','USA','2001-10-19','natoque penatibus et magnis','V25888','PrG1a27kRb'],
            [1,3,'Noelle','Jael','Carver','F','Suspendisse.aliquet@quis.ca','1-713-733-6267','1-273-987-7351','Ap #571-654 Maecenas Avenue','Flint','MI','78528','USA','1999-06-20','ac metus','T97454','IiX6z74fPs'],
            [2,10,'Ima','Jesse','Rojas','F','tellus.lorem.eu@infelisNulla.ca','1-619-975-9855','1-744-428-4650','1494 Tincidunt. Ave','Boston','MA','73279','USA','2000-10-06','dolor sit','Q50330','FmW3y38aVj'],
            [3,2,'Serina','Harriet','Horton','F','faucibus@duinectempus.org','1-758-136-0363','1-829-146-8047','Ap #963-6515 Nunc Ave','Denver','CO','98101','USA','1998-11-07','et nunc. Quisque ornare','V03794','HrB9a74hHu'],
            [3,2,'Isadora','Oprah','Mckinney','F','pretium.et.rutrum@elitNullafacilisi.edu','1-392-376-6887','1-633-181-6309','3875 Lobortis Road','San Francisco','CA','63622','USA','2001-09-01','Cras dolor dolor,','W97250','HmJ8o92uDt'],
            [3,1,'Kelsey','Alvin','Brooks','F','volutpat.nunc.sit@lectusquismassa.org','1-989-157-8988','1-362-260-0581','Ap #512-9671 Vestibulum Av.','Toledo','OH','91961','USA','2002-02-01','nec metus','N25181','FsK4b87cKu'],
            [2,4,'Freya','Violet','Daugherty','F','lobortis.quis.pede@Fuscemi.co.uk','1-778-932-4466','1-923-678-3016','6623 Sed Street','Nampa','ID','58916','USA','2001-08-09','auctor, velit','D41847','UnD2z37ySd'],
            [1,1,'Miriam','Dylan','Goodman','F','gravida.Praesent.eu@mauriseu.com','1-855-375-6341','1-523-614-5129','126-3835 Etiam Rd.','Biloxi','MS','75283','USA','1998-07-07','lobortis quam a felis','W43281','YcE7a29mRt'],
            [1,4,'Maile','Aimee','Frederick','F','fringilla@eu.org','1-587-369-1704','1-184-112-6458','P.O. Box 285, 1322 Maecenas Ave','Vancouver','WA','19291','USA','2001-02-27','Quisque porttitor eros nec','B53082','DdI2r14eNm'],
            [3,1,'Candice','Zeus','Hays','F','purus@quis.edu','1-632-969-8787','1-534-823-3408','P.O. Box 436, 5231 Risus. St.','New Orleans','LA','66631','USA','2001-05-24','Praesent eu','W53423','DvJ3s52yFt'],
            [3,1,'Dai','Bethany','Davidson','F','Donec.non@In.org','1-301-997-7798','1-111-468-0215','3972 Phasellus Av.','Springfield','IL','17876','USA','1999-10-15','tristique pellentesque, tellus sem','H92680','ClY2q36iXx'],
            [3,3,'Kameko','Ross','Juarez','F','tristique.ac@vitaealiquam.co.uk','1-396-327-7816','1-364-438-1137','P.O. Box 916, 2805 Felis St.','Helena','MT','50417','USA','2002-01-22','consectetuer rhoncus. Nullam velit','P11060','AiY2x56jYf'],
            [3,3,'Aphrodite','Brenda','Trevino','F','Nam.porttitor.scelerisque@laciniaSed.ca','1-149-761-1574','1-482-241-2300','P.O. Box 850, 7483 Ut Avenue','Tampa','FL','77368','USA','2000-03-12','Mauris quis','U86105','SjN7b27mSy'],
            [3,4,'Eleanor','Clayton','Russell','F','pharetra.felis@Etiamgravidamolestie.ca','1-644-598-7702','1-222-481-5690','1223 Nunc Avenue','Biloxi','MS','97144','USA','1998-04-05','ornare, elit elit','M75757','CpM0h48cZs']
        ];

        $count = count($userDetails);
        foreach ($userDetails as $userDetailData) {
            $userDetail = new UserDetail();

            $userDetail->user_id = $userDetailData[0];
            $userDetail->user_type = $userDetailData[1];
            $userDetail->first_name = $userDetailData[2];
            $userDetail->middle_name = $userDetailData[3];
            $userDetail->last_name = $userDetailData[4];
            $userDetail->sex = $userDetailData[5];
            $userDetail->email = $userDetailData[6];
            $userDetail->phone = $userDetailData[7];
            $userDetail->cell_phone = $userDetailData[8];
            $userDetail->street_address = $userDetailData[9];
            $userDetail->city = $userDetailData[10];
            $userDetail->state = $userDetailData[11];
            $userDetail->zip_code = $userDetailData[12];
            $userDetail->country = $userDetailData[13];
            $userDetail->date_of_birth = $userDetailData[14];
            $userDetail->user_note = $userDetailData[15];
            $userDetail->membership_number = $userDetailData[16];
            $userDetail->user_magic_code = $userDetailData[17];
            $userDetail->created_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
            $userDetail->updated_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
            $userDetail->deleted_at = null;

            $userDetail->save();

            $count--;
        }
    }
}