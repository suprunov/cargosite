#Установка сборщика
npm install

##Если гульпа нет
npm install gulp -g

#Для разработки (быстрая сборка, триггер на изменения файлов):
gulp watch или npm run dev

#Для продакшена (autoprefix, minificate, no maps):
gulp build или npm run build