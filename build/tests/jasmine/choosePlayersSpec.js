describe("choosePlayers", function() {

    it("aPlayersHasChosenAWeaponIfHuman will return true if the player is a computer player", function() {
        hasChosen = aHumanPlayersHasChosenAWeapon("p1");
        expect (hasChosen).toBe(true);
    });

});