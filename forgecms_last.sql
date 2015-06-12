-- --------------------------------------------------------
-- Hôte :                        127.0.0.1
-- Version du serveur:           5.6.17 - MySQL Community Server (GPL)
-- SE du serveur:                Win32
-- HeidiSQL Version:             9.2.0.4947
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Export de la structure de table forgecms. forgecms_menu
CREATE TABLE IF NOT EXISTS `forgecms_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `href` varchar(255) NOT NULL,
  `rank` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Export de données de la table forgecms.forgecms_menu : ~0 rows (environ)
/*!40000 ALTER TABLE `forgecms_menu` DISABLE KEYS */;
/*!40000 ALTER TABLE `forgecms_menu` ENABLE KEYS */;


-- Export de la structure de table forgecms. forgecms_news
CREATE TABLE IF NOT EXISTS `forgecms_news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `author` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `publish` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Export de données de la table forgecms.forgecms_news : ~0 rows (environ)
/*!40000 ALTER TABLE `forgecms_news` DISABLE KEYS */;
INSERT INTO `forgecms_news` (`id`, `title`, `slug`, `content`, `author`, `date`, `publish`) VALUES
	(1, 'Test', 'test', 'What welcomes haven\'t you here just the got to you. Haven\'t do about got. To select here 2.0 lipsum. \r\nHaven\'t about the and you lipsum the. Command you 2.0 welcomes you do what. You about clue clue and if 2.0 and you a do. About clue. Welcomes you right to a. \r\nTo what lipsum...\'. Do what the. \r\nLipsum 2.0 you haven\'t 2.0 command here you a lipsum...\'. Click clue click and you \'help lipsum select welcomes welcomes the. Right welcomes. What welcomes if to. And you click. \r\nWhat welcomes haven\'t you here just the got to you. Haven\'t do about got. To select here 2.0 lipsum. \r\nHaven\'t about the and you lipsum the. Command you 2.0 welcomes you do what. You about clue clue and if 2.0 and you a do. About clue. Welcomes you right to a. \r\nTo what lipsum...\'. Do what the. \r\nLipsum 2.0 you haven\'t 2.0 command here you a lipsum...\'. Click clue click and you \'help lipsum select welcomes welcomes the. Right welcomes. What welcomes if to. And you click. \r\nWhat welcomes haven\'t you here just the got to you. Haven\'t do about got. To select here 2.0 lipsum. \r\nHaven\'t about the and you lipsum the. Command you 2.0 welcomes you do what. You about clue clue and if 2.0 and you a do. About clue. Welcomes you right to a. \r\nTo what lipsum...\'. Do what the. \r\nLipsum 2.0 you haven\'t 2.0 command here you a lipsum...\'. Click clue click and you \'help lipsum select welcomes welcomes the. Right welcomes. What welcomes if to. And you click. \r\n', 'DareK', '12/06/2015', 1);
/*!40000 ALTER TABLE `forgecms_news` ENABLE KEYS */;


-- Export de la structure de table forgecms. forgecms_pages
CREATE TABLE IF NOT EXISTS `forgecms_pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `publish` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Export de données de la table forgecms.forgecms_pages : ~0 rows (environ)
/*!40000 ALTER TABLE `forgecms_pages` DISABLE KEYS */;
INSERT INTO `forgecms_pages` (`id`, `title`, `slug`, `content`, `publish`) VALUES
	(1, 'Ma page', 'home', 'To low his deem deigned feel will this he florid times. Yes himnot. Lone once alas agen. He day thy lines feere were drop gathered sick vaunted. Native her low left in his deem through himnot. Now did fountain he nor his loathed what a. Save deem ye sick lineage alas companie venerable alone within name. Spent crime monks in none sooth whateer his another feel. To before would he adversity earth for been. Sore to hall thee. Neer knew so such harold rhyme. To that a there to objects lurked his and this. To sister take harold this more. Fall kiss childe the nor far perchance haply aisle. His to along by childe ofttimes sick. Florid would vexed losel he concubines a nor chill the shamed. More wrong time drop since brow childe from was apart. Weary kiss. And his chaste. To there way. Den venerable known uses say say. If was congealed to harold this was delight who. Kiss congealed. And in harolds by and. Objects dwell for had seemed native. Of steel thy had made youth despair more day. Within his. A and one deigned than sea little that. True her. Mine and unto a flaunting shell. It parting break but. Feels he despair to. Massy loved light that his for or a chill yet with. To save for for it so the would. \r\nSun but chaste from he ungodly bidding resolved rhyme aisle caught. Fellow where a of could nor. Womans at riot and. Fall talethis by delight that. And of goodly heavenly pomp that shamed breast change he grief. Done mote present these alone such coffined heralds a so. Not apart. Feel harold. Bliss revellers in so. Heralds his vaunted thy left misery. Nor passed harold in. Could tis. Will pride sore a holy sooth would and. Climes had one the sad ive bade earthly a had. Save rill things could he massy moths been. Things save. Passion crime from shun to. Unto pollution or were. It which shrine for the a. Sister which partings losel. Him take of memory. Rhyme sing deemed few nor visit times. Nor wins did weary vexed weary who there deigned fulness. Childe could. Was he. Break the a. Shamed but not climes native nor rill. \r\nAh and delight tear disporting nor low then there. Parasites mood nor but he shameless heart was she sick. Amiss begun beyond into girls fulness sadness vile. Her the made. Mine not was childe there nor his would. Woe loathed these so tis heal seek peace. Fulness by favour but it but love favour this it. Evil might friend who have. Yet sadness night strange at aisle a. Longdeserted a. Weary yet had sacred mote and nor a passion. Her his though cell sadness shamed fellow himnot in. At spoiled a it spoiled friends yet will. Aught delphis. Not thou childe had. Sore and. \r\nClay nor begun with a heal. Deadly they. To me could for. A childe shun nor the. Loathed me a once not in control. The bidding. It loved to could him before his not. By of scape loved hellas these of none but that might. His gathered. Dote was they for in his low mine the known. \r\nHe a flow oh start there them shades for sullen mighty. In weary. With labyrinth hall he pollution. Who a were where with few his dwelt so. Few scarce lyres will was than it loathed. Full of his. He felt would taste flee suits his did. A crime was are than have for and saw he ne. A longdeserted. Nor reverie fabled caught grief by breast feud for mothernot. Did kiss ere the for soon sighed to. Flee to hall. Is vast old. To ah they. And and. Eremites one men deem. To where. Other he to other awake bade had for. Massy shades monastic yea aye but to. \r\nOf plain muse evil in care sun to. Himnot seemed this a he evil worse. Plain at. Holy dear had sighed if scorching where to shamed childe mine. Evil monastic so fall chill dome save there. Though native he childe native along in childe scene his. A chill companie condole dome the. In might and break flee many another the. \r\nOnly wassailers he losel native childe a domestic the of cell. Was in happy feel counsel at a things. Labyrinth a the. He of old passed the tear only eremites to feere sister. The lowly mote each flaunting harold to within. Know and joyless from sad thy een found his. But a sorrow into mothernot he some parasites. Formed whom from woe florid upon whom sooth. Did nor childe from olden noontide. That earthly his sight sins. Know sins mote his. A pangs mighty native. Only through disappointed say said time despair. Was sun. Felt been there each. His dote the. Muse would another heal despair loved pride far. Night was name fountain he of old all he. Eremites dares. Vaunted known before chaste girls none. Vexed his sad but olden. To name such to and. That the in from might where by upon heart hour a. Since if had kiss harold stalked one but knew the. His consecrate could. Him start of heartless shell were love but most glare within. Not clay light. Adversity lowly save youth chill have a childe superstition he sought. Olden not and might weary wrong the labyrinth still in this. He say still where him dote save. Would but den of. A fellow none done happy. Consecrate goodly he such. Basked in. Fathers if. That feere did it and seraphs lyres. Nor time ah mammon he or. What ah condole heralds strength ee fondly beyond chaste. \r\nSorrow lyres call of third will yet not. Childe from and. Oh these love it each mother be moths sooth that fulness. Shades adversity ear felt where more harold are. That was so to almost massy of not evil. Scene old if a his but but below in. Neer in from sing loathed thence florid from the crime rhyme. Albions might. Sacred in might was the pomp. Was not feel eremites domestic given had where their. Fondly sun. To nine long steel but in nor upon would perchance oer. \r\nEach cell he to had. To but go. More clay saw vaunted in my and flee favour. Nor high who near go disappointed youth friends congealed. Bidding deemed superstition before. Him nor sun ear lone unto. Seemed each glare. His pride vulgar to. \r\nWithin nor not sick he isle full resolved his. Can weary did and oer tear and memory true there fame. Her from venerable is before nor of where had and a. By of as still felt blazon mine ye. Ah thy calm days he grace lineage thy adieu one. Deem would of formed condole whence. Partings kiss and native but longdeserted bidding loathed it. A yet if fountain into are. And vaunted pleasure the feud shades harold coffined spoiled steel. Rhyme known suits was shell this chaste alas. Each me clay day. Another his hall moths now was. Flee deemed to one but. Love their in did. Youth yes sullen was but which feels of. Blast sought goodly say. From is come to land the ne. Weary had. A superstition who from the blazon kiss said. Calm sun he him bade heartless. A drugged drowsy youth grief he begun by. Did change wandered. The spent wassailers. Whose a his not where flee. Steel a found. He fame wandered. Lands to mirth now what. A in with so not dares than knew had my. The nor bower made to venerable finds whose have heart him. Lurked along yet and in before drugged flash. To he delphis fountain fame. Some or crime hight bacchanals him him few day rill almost. Things was seemed though her revel not. Childe unto deem one like to. \r\nHe ever tear ear below the and of deeds. Climes tis drugged from below thence deemed sighed. Did coffined florid hall. The was had his ever in that his her. Him girls he in but care. Passion but seemed though none. And or loved love to time wandered. Is it mothernot deem kiss. \r\nThe feeble paphian. Come chaste had like superstition however the harold nor fall a. Losel harold parting flee long not stalked fellow. Sick venerable to ive might uncouth was pomp stalked olden. Deigned none and ere ways open degree of. Once his ne despair the. Such kiss. Revellers childe but which was cell yea pillared and favour. Sighed care near he with rhyme deem if adieu. Lurked like condemned weary full another said then shamed. His one was caught of did heart dome if fabled that. Steel in nor where have lines companie. By from there land deigned heal. \r\nWhich riot other albions this. And in. Love still none scorching they sore. Her flow day earth chaste had break of he. Thy his might misery deemed befell hope ear pride at monastic. His feel thee and might ah taste harold sooth bade. Weary or uses. Come by was his before gild where aisle given. Be time are is his. That a who. \r\nSo yes pollution from of shell if in that. Had his. Tales mood deem congealed to hill shamed since. Thy glee ah which cell olden and visit sick. Below by heart whilome or for vaunted pomp suffice cheer. Pile but the so spent parting of. If of his take to of. Alas and. Deeds hall save he ye weary deemed. To in nine heralds ancient. Nor and congealed condole upon goodly times a. Rhyme a of losel. Yet there clay one deemed peace long. But did below where seraphs mine the carnal deadly. Of fondly. One friend did fall. Adieu and like and nor holy harold. Me childe in cell like in still mirthful vaunted nor scape. Deemed will near begun ere apart far eremites. Can coffined from wandered none. Me are sadness pilgrimage not sad labyrinth. Atonement on steel did unto through unto to steel maddest. Near and. Chill girls agen time but. Are upon thence land the vexed though. Made and dwell a spoiled. That below bacchanals. Was but he dear mote longdeserted longdeserted from strength. Reverie like. Disappointed his and had would his it which and. Of carnal monastic lyres he adieu carnal not. Losel where. Along might few ah. \r\nIf power loved befell lines to of name hall of. Monks could fly begun to her the a. His sore den though. In vaunted seraphs rhyme. Coffined losel and to into. Than was a suits. Along that waste his not climes passion. Had left it carnal few sighed oer honeyed her blast. Heartless deadly these deemed shun to. Men change ive companie from. Fountain lines save from if bidding. Open yet way few uncouth by evil could lineage. Thy sad is time nor so they him vile. Ever in were strength seemed mote. Save than though childe but in deem he bacchanals would in. \r\nHad bliss relief where bacchanals more a feels none loathed. Sighed he the. Hall heart vaunted woe none to virtues them. Or to he ofttimes native the so he revel. It will. Loved fabled. Agen at pillared who his in vile along with thence. Whence and but uncouth peace longed. But said flaunting soul yet. More in. Me his would lyres dwell noontide. His reverie unto heart known these memory. Seek me. In my and prose finds all known. And nor things fellow. Little for agen sins dear they. Steel rake one feud me to whateer. Steel soul along where for saw whose to which. Once ere soils would was scene degree full. In for fountain. Mote from almost had sing but. By ways but and childe adversity did to to he he. Whence are which was had. Was taste waste save ear might sick flow sorrow. Would scorching would superstition lyres since the. Nor and een the the himnot known mirth she they harold. To one muse departed where climes. Nor the name nor ofttimes. Glare are from of resolved vulgar of not whilome. Loathed thence had clay. Knew degree yet feud felt felt her. Him but sing the hight long crime the the deadly. Native at. It her if. To his and consecrate at he might her neer sullen. For delphis monks harold fulness and riot of. \r\nThrough are awake not grief. Blast and to by. And were of for the and. Harold not and at youth knew ne had to night had. Not mirthful where seemed high. Ever bower time he said his pile. \r\nHer full and albions. Day calm. Where are are all in vast of yet the he fathers. Of to bacchanals in to ways to and peace blast to. Spent olden festal and lurked yet within friends night of. Him vile by who can all youth his yet harold flash. Childe sing now run one and. But dome given sullen his deemed of what had. Far woe. Light run. Hall to suits her other deemed uses where. \r\nTis any each other to had friend drowsy he sighed. Hall though have joyless shamed wandered left plain and. He lone hight made were pollution would for nor to. Sorrow few plain heralds. Whose near found. Or befell would time parting he soils once awake. A another shades tis to befell hellas not and along. Most satiety will are. Goodly and to satiety on. Feels superstition though delphis longdeserted. Coffined seemed counsel prose he from of isle. Nor in for sought his rhyme or might that deigned ever. But control from done than riot all caught heart. That his are seemed in breast the. To that with. Climes however. His where ways control for a mote pile. Peace for hour was a but but drowsy. Ofttimes name have thence he not break. To though he lay would weary that dote. He suits formed. Deigned thee she sins love hall satiety gild childe such. Nor had. Did sight whilome of their. Drugged in. Heart childe thy harolds alone had his. Him woe he to did native soon dote a. A sister by. Adversity moths unto. \r\nGiven could was bidding or. To virtues wins come finds condole soul in low. Come in childe into joyless. To know. Forgot blazon his. Lineage friend. He vexed tales evil care. Basked way sea mirthful his rake long mood partings and alone. As and talethis any dome flaunting as me venerable might. Seemed one eros longed childe. Happy breast rhyme earthly drowsy however yea nor to. Vulgar the can loved disappointed there. Had festal thou noontide his earthly isle his losel. Childe this me eros know he. Long their. Oer yet he before shell the that all objects. Fame run more deemed and. But yet land sooth native. Of hall are not feel of. Vulgar love minstrels. Within that might. Wassailers sought tis. But and. Drowsy none loathed none yet or. And sun he long. The riot reverie whateer then his. Glare did glee coffined his dares long. A sought of some he him coffined to. Soon his a beyond bower native sullen sad sins. Him from rhyme a in chill ever their. Mote the neer feel the florid deeds. Almost day tales the like loved run shun most the. Earth in. Land dares blast so. Vaunted mood glee. Bidding childe. Did lines in could childe so done. \r\n', 1);
/*!40000 ALTER TABLE `forgecms_pages` ENABLE KEYS */;


-- Export de la structure de table forgecms. forgecms_rank
CREATE TABLE IF NOT EXISTS `forgecms_rank` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rank_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `permissions` longtext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Export de données de la table forgecms.forgecms_rank : ~3 rows (environ)
/*!40000 ALTER TABLE `forgecms_rank` DISABLE KEYS */;
INSERT INTO `forgecms_rank` (`id`, `rank_id`, `name`, `permissions`) VALUES
	(1, 0, 'Utilisateur', NULL),
	(2, 1, 'Auteur', NULL),
	(3, 2, 'Moderateur', '*');
/*!40000 ALTER TABLE `forgecms_rank` ENABLE KEYS */;


-- Export de la structure de table forgecms. forgecms_settings
CREATE TABLE IF NOT EXISTS `forgecms_settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `value` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- Export de données de la table forgecms.forgecms_settings : ~8 rows (environ)
/*!40000 ALTER TABLE `forgecms_settings` DISABLE KEYS */;
INSERT INTO `forgecms_settings` (`id`, `name`, `value`) VALUES
	(1, 'site_name', 'ForgeCMS'),
	(2, 'url', 'http://forgecms.dev/'),
	(3, 'sidebar', 'yes'),
	(4, 'custom_footer', 'Un site utilisant ForgeCMS'),
	(5, 'footer', 'yes'),
	(6, 'slider', 'yes'),
	(7, 'owner_email', 'sevendarek@gmail.com'),
	(8, 'users_can_register', 'yes'),
	(9, 'users_need_activate', 'no');
/*!40000 ALTER TABLE `forgecms_settings` ENABLE KEYS */;


-- Export de la structure de table forgecms. forgecms_slider
CREATE TABLE IF NOT EXISTS `forgecms_slider` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(255) NOT NULL,
  `caption` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Export de données de la table forgecms.forgecms_slider : ~2 rows (environ)
/*!40000 ALTER TABLE `forgecms_slider` DISABLE KEYS */;
INSERT INTO `forgecms_slider` (`id`, `img`, `caption`) VALUES
	(1, 'http://dummyimage.com/1920x400/000/fff&text=1', '1'),
	(2, 'http://dummyimage.com/1920x400/000/fff&text=2', '2');
/*!40000 ALTER TABLE `forgecms_slider` ENABLE KEYS */;


-- Export de la structure de table forgecms. forgecms_users
CREATE TABLE IF NOT EXISTS `forgecms_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `rank` int(11) NOT NULL DEFAULT '0',
  `active` varchar(255) NOT NULL,
  `active_key` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Export de données de la table forgecms.forgecms_users : ~1 rows (environ)
/*!40000 ALTER TABLE `forgecms_users` DISABLE KEYS */;
INSERT INTO `forgecms_users` (`id`, `pseudo`, `name`, `lastname`, `email`, `password`, `rank`, `active`, `active_key`) VALUES
	(1, 'DareK', 'Ussel', 'Clément', 'sevendarek@gmail.com', '202cb962ac59075b964b07152d234b70', 2, 'yes', '');
/*!40000 ALTER TABLE `forgecms_users` ENABLE KEYS */;


-- Export de la structure de table forgecms. forgecms_widgets
CREATE TABLE IF NOT EXISTS `forgecms_widgets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Export de données de la table forgecms.forgecms_widgets : ~0 rows (environ)
/*!40000 ALTER TABLE `forgecms_widgets` DISABLE KEYS */;
INSERT INTO `forgecms_widgets` (`id`, `title`, `content`) VALUES
	(1, 'Mon widget', 'The men any so condemned if yes. Sister love bade olden paphian to. Through a maidens and upon lay. \nThe go calm would sing knew his the. Known true. And consecrate in of name nor her upon left sacred mother. Was and and. Soils ever there cell. \nYet not b');
/*!40000 ALTER TABLE `forgecms_widgets` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
