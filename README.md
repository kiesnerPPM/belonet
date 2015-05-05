# belonet

Kurzanleitung

Erst muss Git installiert werden. Zusätzlich sollte euer Name und eure E-Mail Adresse in Git gesetzt sein.

Danach kann über die Konsole eine lokale Kopie des Repositories erzeugt werden:
```
git clone https://github.com/kiesnerPPM/belonet.git
```

Danach kann man die Dateien im Repository beliebig bearbeiten.
Wenn vereänderte Dateien hochgeladen werden sollen, müssen diese erst hinzugefügt werden:
```
git add pfad/zur/datei
```

Hinzufügen aller Dateien, die bereits getrackt werden:
```
git add -u
```

Es können auch alle Dateien hinzugefügt werden:
```
git add *
```

Danach kann ein Commit erstellt werden
```
git commit
```

Jetzt öffnet sich ein Editor, in dem eine Beschreibung des Commits eingetragen wird.

Grundregel:
* Erste Zeile: Kurzbeschreibung des Commits (<= 50 Zeichen)
* Zweite Zeile leer
* Dritte Zeile ff: Ggf. nähere Beschreibung des Commits

Änderungen hochladen:
```
git push
```

## Wichtig
* Immer die aktuelle Version des Repositories verwenden bevor man anfängt zu arbeiten!
  ```
  git pull
  ```
* Für abgetrennte Arbeiten/Issues bitte eigene Branches erstellen. Dann kommen wir uns nicht gegenseitig in die Quere.
