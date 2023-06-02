-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 02 2023 г., 05:23
-- Версия сервера: 10.3.22-MariaDB
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `dw`
--

-- --------------------------------------------------------

--
-- Структура таблицы `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `image` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tag_id` int(11) DEFAULT NULL,
  `status_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `articles`
--

INSERT INTO `articles` (`id`, `image`, `title`, `content`, `tag_id`, `status_id`) VALUES
(1, 'image/figma/fire_group.png', '<h1>Горячие клавиши в <span class=\"f\">Figma</span></h1>', '<div class=\"article-content\">\r\n            <h2 id=\"shortcuts\">Keyboard Shortcuts в Фигме</h2>\r\n                <p>В редакторе Figma невозможно менять сочетания клавиш так, как вам удобно. Вам придётся использовать то, что предлагают создатели Фигма.</p>\r\n                <p>Все существующие горячие клавиши в Фигме можно найти в разделе <b>\"Keyboard Shortcuts\"</b>. Этот раздел можно открыть двумя способами:</p>\r\n                    <ol>\r\n                        <li>Нажав сочетание клавиш \"Ctrl + Shift + ?\"</li>\r\n                        <li>Нажав на значок вопроса в правом нижнем углу экрана</li>\r\n                    </ol>\r\n                <img src=\"image/figma/article/hotkeys/1.png\" alt=\"Раздел Keyboard Shortcuts\" style=\"text-align: center;\">\r\n                <p>В нижней части экрана вы увидите черное окно со всеми возможными горячими клавишами и сочетаниями клавиш.</p>\r\n                    <ol>\r\n                        <li>Если вы уже использовали какую-то комбинацию, то она будет подсвечена голубым.</li>\r\n                        <li>Если вы еще ни разу не использовали комбинацию, то она не будет подсвечена голубым.</li>\r\n                    </ol>\r\n                <p>Чтобы убрать черное окно со всеми комбинациями клавиш просто нажмите на крестик в правом верхнем углу этого окна.</p>\r\n            <h2 id=\"combination\">Самые важные комбинации клавиш в Фигма</h2>\r\n                <p>Я давно работаю в редакторе Фигма и собрала свой топ горячих клавиш и комбинаций клавиш, которые постоянно применяю в своей работе. Их не очень много, поэтому эти хоткеи легко запомнить:</p>\r\n                    <ul>\r\n                        <li>Сtrl + C — копировать элемент</li>\r\n                        <li>Сtrl + V — вставить элемент</li>\r\n                        <li>Сtrl + X — вырезать элемент</li>\r\n                        <li>Сtrl + A — выделить все элементы сразу</li>\r\n                        <li>I — инструмент пипетка, выбирайте цвет</li>\r\n                        <li>K — менять размер</li>\r\n                        <li>V — стандартный инструмент выделения и перемещения</li>\r\n                        <li>[ — переместить слой назад, за всеми слоями</li>\r\n                        <li>] — переместить слой вперед, перед всеми слоями</li>\r\n                        <li>Ctrl + Shift + 4 — показать/спрятать сетки</li>\r\n                        <li>Зажатый Alt — дублировать элементы / фреймы</li>\r\n                        <li>Зажатый Ctrl + колесико мыши — приближаться к объектам и отдаляться от них</li>\r\n                        <li>Зажатый пробел + зажатая левая кнопка мыши — перемещение по рабочей области</li>\r\n                        <li>Shift + A — создать auto layout</li>\r\n                        <li>Ctrl + \\ — убрать или показать интерфейс редактора Фигма</li>\r\n                    </ul>\r\n                <p>Этого набора горячих клавиш <b>вполне достаточно для решения большинства задач</b>.</p>\r\n            <h2 id=\"ruhotkeys\">Все горячие клавиши в Фигма с переводом на русский и описанием</h2>\r\n                <p>Сочетание клавиш \"Ctrl + Shift + ?\" откроет внизу экрана окно чёрного цвета. Это вкладка Essential (в переводе с английского — \"существенное\", \"важное\").</p>\r\n                <p id=\"essential\"><b>Во вкладке Essential можно:</b></p>\r\n                    <ul>\r\n                        <li>(Show/Hide UI) Ctrl + \\ — скрыть или вывести на экран интерфейс Фигмы;</li>\r\n                        <li>(Pick Color) I — выбрать \"пипеткой\" цвет или оттенок из любого объекта и применить его в своей работе;</li>\r\n                        <li>(Quick Actions) Ctrl + / — быстро найти плагины, слои или команды в Фигме.</li>\r\n                    </ul>\r\n                    <img src=\"image/figma/article/hotkeys/2.png\" alt=\"вкладка Essential\">\r\n                <p id=\"tools\"><b>Вкладка Tools (или инструменты):</b></p>\r\n                    <ul>\r\n                        <li>(Move tool) V — выделение и перемещение объектов в рамках проекта;</li>\r\n                        <li>(Frame tool) F — создание нового фрейма (рабочего пространства дизайнера в Фигме);</li>\r\n                        <li>(Pen tool) P — рисование пером;</li>\r\n                        <li>(Pencil tool) Shift + P — рисование карандашом;</li>\r\n                        <li>(Text tool) T — добавление нового текста;</li>\r\n                        <li>(Rectangle tool) R — готовый прямоугольник, параметры которого вы можете задать на правой панели;</li>\r\n                        <li>(Ellipse tool) O — эллипс или круг (с изменчивыми параметрами);</li>\r\n                        <li>(Line tool) L — линия;</li>\r\n                        <li>(Arrow tool) Shift + L — стрелка;</li>\r\n                        <li>(Add comment) C — написание комментария или заметки к выделенному объекту;</li>\r\n                        <li>(Pick color) I — распознавание и выбор цвета при помощи пипетки;</li>\r\n                        <li>(Slice tool) S — обрезка элемента \"ножом\".</li>\r\n                    </ul>\r\n                    <img src=\"image/figma/article/hotkeys/3.png\" alt=\"вкладка Tools\">\r\n                <p id=\"view\"><b>Вкладка View (или вид) предназначена для того, чтобы показывать или скрывать элементы:</b></p>\r\n                    <ul>\r\n                        <li>Shift + R — показать или скрыть линейки;</li>\r\n                        <li>Ctrl + Shift + 3 на Windows и ⌘ + Y на Mac — показать или скрыть обводку всех элементов;</li>\r\n                        <li>Ctrl + Alt + Y на Windows и ⌘ + P на Mac — показать или скрыть пиксельный просмотр;</li>\r\n                        <li>Ctrl + Shift + 4 на Windows и Ctrl + G на Mac — показать или скрыть сетку;</li>\r\n                        <li>Ctrl + \' на Windows и ⌘ + \' на Mac — показать или скрыть пиксельную сетку;</li>\r\n                        <li>Ctrl + \\ на Windows и ⌘ + \\ на Mac — показать или скрыть боковые панели;</li>\r\n                        <li>Ctrl + Alt + \\ на Windows и Alt + ⌘ + \\ на Mac — показать или скрыть курсоры других пользователей;</li>\r\n                        <li>Alt + 1 — показать или скрыть только слои;</li>\r\n                        <li>Alt + 2 — показать или скрыть только компоненты;</li>\r\n                        <li>Alt + 8 — показать или скрыть панель дизайна;</li>\r\n                        <li>Alt + 9 — показать или скрыть панель прототипа.</li>\r\n                    </ul>\r\n                    <img src=\"image/figma/article/hotkeys/4.png\" alt=\"вкладка View\">\r\n                <p id=\"zoom\"><b>Вкладка Zoom (или масштабирование) отвечает за расположение и перемещение объектов на рабочем пространстве в Фигма:</b></p>\r\n                    <ul>\r\n                        <li>Space + drag — перемещение Zoom по рабочему пространству;</li>\r\n                        <li>+ (плюс) — увеличение масштаба (приближение);</li>\r\n                        <li>- (минус) — уменьшение масштаба (отдаление);</li>\r\n                        <li>Shift + 0 — отображение один к одному (экран 1:1);</li>\r\n                        <li>Shift + 1 — масштабирование всего рабочего пространства;</li>\r\n                        <li>Shift + 2 — масштабирование выбранного вами элемента;</li>\r\n                        <li>Shift + N — масштабирование предыдущего фрейма;</li>\r\n                        <li>N — масштабирование следующего фрейма;</li>\r\n                        <li>Page Up — поиск предыдущей страницы;</li>\r\n                        <li>Page Down — поиск следующей страницы;</li>\r\n                        <li>Home — поиск предыдущего фрейма;</li>\r\n                        <li>End — поиск следующего фрейма.</li>\r\n                    </ul>\r\n                    <img src=\"image/figma/article/hotkeys/5.png\" alt=\"вкладка Zoom\">\r\n                <p id=\"text\"><b>Вкладка Text (или работа с текстом):</b></p>\r\n                    <ul>\r\n                        <li>Ctrl + B на Windows и ⌘ + B на Mac — выделение текста <b>жирным</b>;</li>\r\n                        <li>Ctrl + i и ⌘ + i на Mac — выделение текста <i>курсивом</i>;</li>\r\n                        <li>Ctrl + U и ⌘ + U на Mac — <u>подчеркивание</u> текста;</li>\r\n                        <li>Ctrl + Shift + V — вставление и сопоставление элементов;</li>\r\n                        <li>Ctrl + Alt + L на Windows и ⌘ + Alt + L на Mac — выравнивание текста по левому краю фрейма;</li>\r\n                        <li>Ctrl + Alt + T на Windows и ⌘ + Alt + T на Mac — выравнивание текста по центру фрейма;</li>\r\n                        <li>Ctrl + Alt + R на Windows и ⌘ + Alt + R на Mac — выравнивание текста по правому краю фрейма;</li>\r\n                        <li>Ctrl + Alt + J на Windows и ⌘ + Alt + J на Mac — выравнивание текста по ширине;</li>\r\n                        <li>Ctrl + Shift + < и > на Windows и ⌘ + Shift + < и > на Mac — изменение размера текста;</li>\r\n                        <li>Alt + < и > — изменение расстояния между символами (буквами);</li>\r\n                        <li>Alt + Shift + < и > — изменение расстояния между строками.</li>\r\n                    </ul>\r\n                    <img src=\"image/figma/article/hotkeys/6.png\" alt=\"вкладка Text\">\r\n                <p id=\"shape\"><b>Вкладка Shape (работа с фигурами и векторными изображениями в Фигма):</b></p>\r\n                    <ul>\r\n                        <li>P — перо;</li>\r\n                        <li>Shift + P — карандаш;</li>\r\n                        <li>B — заливка цветом;</li>\r\n                        <li>Alt + / — удаление заливки;</li>\r\n                        <li>/ — удаление обводки;</li>\r\n                        <li>Shift + X — одновременное изменение цвета обводки и заливки (они поменяются местами);</li>\r\n                        <li>Ctrl + Shift + O на Windows и ⌘ + Shift + O на Mac — преобразование в кривые;</li>\r\n                        <li>Ctrl + E на Windows и ⌘ + E на Mac — работа с точками векторных изображений.</li>\r\n                    </ul>\r\n                    <img src=\"image/figma/article/hotkeys/7.png\" alt=\"вкладка Shape\">\r\n                <p id=\"selection\"><b>Вкладка Selection (или выделение):</b></p>\r\n                    <ul>\r\n                        <li>Ctrl + A на Windows и ⌘ + A на Mac — выделение всего;</li>\r\n                        <li>Ctrl + Shift + A на Windows и ⌘ + Shift + A на Mac — выделение всего, кроме выбранного вами элемента;</li>\r\n                        <li>Esc — отмена выделения;</li>\r\n                        <li>Ctrl + click Windows и ⌘ + click на Mac — выделение слоёв, находящихся под другими слоями;</li>\r\n                        <li>Ctrl + right click Windows и ⌘ + right click на Mac — выделение слоя на боковой панели;</li>\r\n                        <li>Enter — выделение дочернего элемента;</li>\r\n                        <li>Shift + Enter — выделение родительского элемента;</li>\r\n                        <li>Tab — выделение следующего по порядку элемента;</li>\r\n                        <li>Shift + Tab — выделение предыдущего по порядку элемента;</li>\r\n                        <li>Ctrl + G на Windows и ⌘ + G на Mac — группировка элементов;</li>\r\n                        <li>Ctrl + Shift + G на Windows и ⌘ + Shift + G на Mac — разгруппировка элементов;</li>\r\n                        <li>Ctrl + Alt + G на Windows и ⌘ + Alt + G на Mac — преобразование во фрейм;</li>\r\n                        <li>Ctrl + Shift + H на Windows и ⌘ + Shift + H на Mac — показ или скрытие элемента;</li>\r\n                        <li>Ctrl + Shift + L на Windows и ⌘ + Shift + L на Mac — блокировка и разблокировка элемента.</li>\r\n                    </ul>\r\n                    <img src=\"image/figma/article/hotkeys/8.png\" alt=\"вкладка Selection\">\r\n                <p id=\"cursor\"><b>Вкладка Cursor (или курсор):</b></p>\r\n                    <ul>\r\n                        <li>Alt — выделение элемента при клике;</li>\r\n                        <li>Alt — копирование элемента в движении;</li>\r\n                        <li>Ctrl + click на Windows и ⌘ + click на Mac — выделение слоёв, находящихся под другими слоями;</li>\r\n                        <li>Ctrl + right click на Windows и ⌘ + right click на Mac — показ иерархии выбранного элемента;</li>\r\n                        <li>Alt — изменение размера относительно центра элемента;</li>\r\n                        <li>Shift — пропорциональное изменение размера;</li>\r\n                        <li>Ctrl на Windows и ⌘ на Mac — перемещение элемента во время изменения его размера.</li>\r\n                    </ul>\r\n                    <img src=\"image/figma/article/hotkeys/9.png\" alt=\"вкладка Cursor\" style>\r\n                <p id=\"edit\"><b>Вкладка Edit (или редактирование):</b></p>\r\n                    <ul>\r\n                        <li>Ctrl + C на Windows и ⌘ + C на Mac — создание копии элемента;</li>\r\n                        <li>Ctrl + X на Windows и ⌘ + X на Mac — вырезание (или удаление) элемента;</li>\r\n                        <li>Ctrl + V на Windows и ⌘ + V на Mac — вставка (или добавление) элемента;</li>\r\n                        <li>Ctrl + Shift + V на Windows и ⌘ + Shift + V на Mac — вставка поверх выбранного элемента;</li>\r\n                        <li>Ctrl + D на Windows и ⌘ + D на Mac — создание копии;</li>\r\n                        <li>Ctrl + R на Windows и ⌘ + R на Mac — переименование элемента;</li>\r\n                        <li>Ctrl + Shift + E на Windows и ⌘ + Shift + E на Mac — экспорт элемента;</li>\r\n                        <li>Ctrl + Alt + C на Windows и ⌘ + Alt + C на Mac — создание копии свойств выделенного элемента;</li>\r\n                        <li>Ctrl + Alt + V на Windows и ⌘ + Alt + V на Mac — вставка скопированных свойств в выбранный вами элемент.</li>\r\n                    </ul>\r\n                    <img src=\"image/figma/article/hotkeys/10.png\" alt=\"вкладка Edit\">\r\n                <p id=\"transform\"><b>Вкладка Transform (или трансформация):</b></p>\r\n                    <ul>\r\n                        <li>Shift + H — отражение по горизонтали;</li>\r\n                        <li>Shift + V — отражение по вертикали;</li>\r\n                        <li>Ctrl + Alt + M на Windows и ⌘ + Alt + M на Mac — создание маски;</li>\r\n                        <li>Enter — включение редактирования векторных объектов или изображений;</li>\r\n                        <li>Ctrl + Shift + K на Windows и ⌘ + Shift + K на Mac — вставка изображения;</li>\r\n                        <li>Alt + dbl-click — обрезка изображения;</li>\r\n                        <li>1 — задание прозрачности элемента 10%;</li>\r\n                        <li>5 — задание прозрачности элемента 50%;</li>\r\n                        <li>0 — задание прозрачности элемента 100%.</li>\r\n                    </ul>\r\n                <img src=\"image/figma/article/hotkeys/11.png\" alt=\"вкладка Transform\">\r\n                <p id=\"arrange\"><b>Вкладка Arrange (или выравнивание):</b></p>\r\n                    <ul>\r\n                        <li>Ctrl + ] на Windows и ⌘ + ] на Mac — перемещение элемента ближе к переднему плану;</li>\r\n                        <li>Ctrl + [ на Windows и ⌘ + [ на Mac — перемещение элемента дальше от переднего плана;</li>\r\n                        <li>Ctrl + Shift + ] на Windows и ⌘ + Shift + ] на Mac — перемещение элемента на передний план;</li>\r\n                        <li>Ctrl + Shift + [ на Windows и ⌘ + Shift + [ на Mac — перемещение элемента на задний план;</li>\r\n                        <li>Alt + A — выравнивание по левой стороне;</li>\r\n                        <li>Alt + D — выравнивание по правой стороне;</li>\r\n                        <li>Alt + W — выравнивание по верхней стороне;</li>\r\n                        <li>Alt + S — выравнивание по нижней стороне;</li>\r\n                        <li>Alt + H — выравнивание по горизонтальной линии элементов;</li>\r\n                        <li>Alt + V — выравнивание по вертикальной линии элементов;</li>\r\n                        <li>Ctrl + Shift + Alt + H на Windows и ⌘ + Shift + Alt + H на Mac — выравнивание с распределением горизонтального пространства;</li>\r\n                        <li>Ctrl + Shift + Alt + V на Windows и ⌘ + Shift + Alt + V на Mac — выравнивание с распределением вертикального пространства. </li>\r\n                    </ul>\r\n                    <img src=\"image/figma/article/hotkeys/12.png\" alt=\"вкладка Arrange\">\r\n                <p id=\"components\"><b>Вкладка Components (или компоненты):</b></p>\r\n                    <ul>\r\n                        <li>Alt + —показ всех элементов;</li>\r\n                        <li>Ctrl + Alt + K на Windows и ⌘ + Alt + K на Mac — создание компонента;</li>\r\n                        <li>Ctrl + Alt + B на Windows и ⌘ + Alt + B на Mac — преобразование компонента во фрейм;</li>\r\n                        <li>Ctrl + Alt + O на Windows и ⌘+ Alt + O на Mac — переход к многопользовательской библиотеки.</li>\r\n                    </ul>\r\n                    <img src=\"image/figma/article/hotkeys/13.png\" alt=\"вкладка Components\">\r\n                <p>Мы перечислили все горячие клавиши в графическом редакторе Figma. Конечно, запомнить их с первого раза невозможно. Поэтому я советую вам изучить список важнейших инструментов, а остальные — запоминать в процессе практики.</p>\r\n        </div>\r\n        <a href=\"https://ddesign.moscow/hotkeys_figma#:~:text=Alt%20%2B%20%E2%80%94%D0%BF%D0%BE%D0%BA%D0%B0%D0%B7%20%D0%B2%D1%81%D0%B5%D1%85%20%D1%8D%D0%BB%D0%B5%D0%BC%D0%B5%D0%BD%D1%82%D0%BE%D0%B2%3B,Mac%20%E2%80%94%20%D0%BF%D0%B5%D1%80%D0%B5%D1%85%D0%BE%D0%B4%20%D0%BA%20%D0%BC%D0%BD%D0%BE%D0%B3%D0%BE%D0%BF%D0%BE%D0%BB%D1%8C%D0%B7%D0%BE%D0%B2%D0%B0%D1%82%D0%B5%D0%BB%D1%8C%D1%81%D0%BA%D0%BE%D0%B9%20%D0%B1%D0%B8%D0%B1%D0%BB%D0%B8%D0%BE%D1%82%D0%B5%D0%BA%D0%B8.\" class=\"autor\">Автор статьи: Дмитрия Сугак</a>', 1, 3),
(3, 'image/figma/frame.png', '<h1>Фреймы в <span class=\"f\">Figma</span></h1>', '<p><b>Границы фреймов</b></p>\r\n                    <p>Фреймы могут иметь явную границу, которая помогает понимать их размер в ситуации, когда у фрейма нет фона. Для этого используется настройка View → Frame Outlines, Cmd + /, ou.</p>\r\n                    <p>Слева Frame Outlines выключен, справа включен. Также в определении границ фреймов поможет режим Outline, Cmd + Y.</p>\r\n                <p><b>Оборачивание фреймом</b></p>\r\n                    <p>Любой объект можно за один клик обернуть фреймом. Это бывает иногда нужно, чтобы впоследствии его экспортировать или превратить в компонент.</p>\r\n                    <p>Для этого используется команда Frame Selection, Opt + Cmd + G.</p>\r\n                    <p>Как и артборды в Скетче, фреймы — это разновидность групп. Поэтому их можно развязывать при помощи Shift + Cmd + G.</p>\r\n                    <p>Если фрейм вокруг слоя уже есть и нужно ужать его до размеров этого слоя, как и в Скетче, используется команда Resize To Fit. Cmd + /, fit.</p>', 1, 3),
(4, 'image\\photoshop/fire_group_ph.png', '<h1>Горячие клавиши в <span class=\"p\">Photoshop</span></h1>', '<p>Сразу предупреждаю – разница в Windows и macOS состоит лишь в функциональных кнопках вроде Ctrl/Command и Alt/Option.</p>\r\n            <p id=\"baza\"><b>Базовые сочетания</b></p>\r\n                <ul>\r\n                    <li>Ctrl/Command + N – создать новый файл.</li>\r\n                    <li>Ctrl/Command + S–сохранить файл, по умолчанию в формате PSD.</li>\r\n                    <li>Shift + Ctrl/Command + S – сохранить файл как… А там уже выбираете формат.</li>\r\n                    <li>Ctrl/Command + O – открыть существующий файл.</li>\r\n                    <li>Ctrl/Command + Z –отменить последнее действие. Причем если у вас приложение версии 2019 года или ранее, помните, что при повторном нажатии на нее совершается возврат отмененного действия.</li>\r\n                    <li>Shift + Ctrl /Command + Z – повторить отмененное действие в версии 2020 года и позже. В 2019 и ранее эта комбинация позволяла отменить серию действий.</li>\r\n                    <li>Ctrl/Command + Tab – переключиться на другое открытое окно.</li>\r\n                    <li>Ctrl/Command + W – закрыть текущую вкладку.</li>\r\n                    <li>Ctrl/Command + Alt/Option + W – закрыть все вкладки.</li>\r\n                    <li>Ctrl/Command + K – открытие основных настроек программы.</li>\r\n                </ul>', 2, 3);

-- --------------------------------------------------------

--
-- Структура таблицы `lessons`
--

CREATE TABLE `lessons` (
  `id` int(11) NOT NULL,
  `image` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tag_id` int(11) DEFAULT NULL,
  `status_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `lessons`
--

INSERT INTO `lessons` (`id`, `image`, `title`, `content`, `tag_id`, `status_id`) VALUES
(1, 'image/figma/sovet.jpg', '<h1>Советы для дизайнеров продукта</h1>', '<p>Как продуктовому дизайнеру сохранять хорошую репутацию? Дизайнер с 12-летним опытом и вице-президент Urban Company Амит Дас советует правило: «обещайте сделать вечером и завершайте утром».</p>\r\n            <p>В своем блоге на Medium он сформулировал советы, которые помогут начинающим дизайнерам найти работу, а практикам — сохранять вдохновение и работать над вкусом.</p>\r\n            <h2>Как составить портфолио и пройти собеседование</h2>\r\n            <p><b>1. Откажитесь от разбора кейсов и продемонстрируйте свои основные навыки</b></p>\r\n                <p>Большинство кейсов громоздки, а решения не всегда выглядят блестящими. Для того, кто проводит собеседование, они, вероятно, будут не слишком интересны.</p>\r\n                <p>Сделайте так, чтобы потенциальный работодатель сразу понял ваши главные навыки.</p>\r\n                <p>Опишите свои ключевые умения и продемонстрируйте их при помощи портфолио.</p>', 1, 3);

-- --------------------------------------------------------

--
-- Структура таблицы `status`
--

CREATE TABLE `status` (
  `id` int(11) NOT NULL,
  `status` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `status`
--

INSERT INTO `status` (`id`, `status`) VALUES
(1, 'черновик'),
(2, 'ожидает'),
(3, 'опубликовано');

-- --------------------------------------------------------

--
-- Структура таблицы `tag`
--

CREATE TABLE `tag` (
  `id` int(11) NOT NULL,
  `tag` varchar(16) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `tag`
--

INSERT INTO `tag` (`id`, `tag`) VALUES
(1, 'figma'),
(2, 'photoshop'),
(3, 'illustrator'),
(4, 'universal');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` varchar(16) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(16) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `full_name` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `full_name`, `email`, `avatar`, `status`) VALUES
(1, 'admin', 'admin12345', 'admin', 'admin@gmail.com', NULL, 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tag_id` (`tag_id`),
  ADD KEY `status_id` (`status_id`);

--
-- Индексы таблицы `lessons`
--
ALTER TABLE `lessons`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tag_id` (`tag_id`),
  ADD KEY `status_id` (`status_id`);

--
-- Индексы таблицы `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `tag`
--
ALTER TABLE `tag`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `lessons`
--
ALTER TABLE `lessons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `status`
--
ALTER TABLE `status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `tag`
--
ALTER TABLE `tag`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_ibfk_1` FOREIGN KEY (`tag_id`) REFERENCES `tag` (`id`),
  ADD CONSTRAINT `articles_ibfk_2` FOREIGN KEY (`status_id`) REFERENCES `status` (`id`);

--
-- Ограничения внешнего ключа таблицы `lessons`
--
ALTER TABLE `lessons`
  ADD CONSTRAINT `lessons_ibfk_1` FOREIGN KEY (`tag_id`) REFERENCES `tag` (`id`),
  ADD CONSTRAINT `lessons_ibfk_2` FOREIGN KEY (`status_id`) REFERENCES `status` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
