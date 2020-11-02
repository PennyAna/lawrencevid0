INSERT INTO title (titlename, titleinfo, genreid)
VALUES ('Star Wars: A New Hope', 'First movie in the original Star Wars trilogy', '11');
INSERT INTO title (titlename, titleinfo, genreid)
VALUES ('Star Wars: The Empire Strikes Back', 'Second movie in the original Star Wars trilogy', '11');
INSERT INTO title (titlename, titleinfo, genreid)
VALUES ('Star Wars: Return of the Jedi', 'Third movie in the original Star Wars trilogy', '11');
INSERT INTO title (titlename, titleinfo, genreid)
VALUES ('Lord of the Rings: Fellowship of the Ring', 'First movie in the LOTR trilogy', '2');
INSERT INTO title (titlename, titleinfo, genreid)
VALUES ('Lord of the Rings: The Two Towers', 'Second movie in the LOTR trilogy', '2');
INSERT INTO title (titlename, titleinfo, genreid)
VALUES ('Lord of the Rings: Return of the King', 'Third movie in the LOTR trilogy', '2');
INSERT INTO title (titlename, titleinfo, genreid)
VALUES ('My Big Fat Greek Wedding', 'The troubles and hilarity of marrying into a Greek family', '5');
INSERT INTO title (titlename, titleinfo, genreid)
VALUES ('Darby OGill and the Little People', 'Darby works to out-trick the King of the Leprechauns to help his family', '5');
INSERT INTO title (titlename, titleinfo, genreid)
VALUES ('Iron Man', 'Origin movie for Iron Man (Marvel cinematic universe)', '3';
INSERT INTO title (titlename, titleinfo, genreid)
VALUES ('While You Were Sleeping', 'Case of mistaken identity as an unconcious mans fiancee', '5');


-- Populate genretitle from title
INSERT INTO genretitle (genreid, titleid)
SELECT genreid, titleid FROM title;
