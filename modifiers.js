var commitStats = function() {
    var stats = [0, 0, 0, 0, 0, 0];
    var names = ["strength", "dexterity", "constitution", "intelligence", "wisdom", "charisma"]
    var ids = ["s-mod", "d-mod", "c-mod", "i-mod", "w-mod", "ch-mod"];
    for (var i = 0; i < 6; i++) {
        stats[i] = Math.floor((document.getElementById(names[i]).value - 10)/2);
        if (stats[i] >= 0) {
            document.getElementById(ids[i]).textContent = "[+" + stats[i] + "]";
        }
        else {
            document.getElementById(ids[i]).textContent = "[" + stats[i] + "]";
        }
    }
}

document.getElementById('commitstats').onclick = commitStats;