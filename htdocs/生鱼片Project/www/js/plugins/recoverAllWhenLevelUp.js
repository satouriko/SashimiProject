/*:
 * @plugindesc 在升级时完全恢复
 * @author Catsworld
 */
var _backup_Game_Actor_levelUp = Game_Actor.prototype.levelUp;
Game_Actor.prototype.levelUp = function() {
	_backup_Game_Actor_levelUp.call(this);
	this.recoverAll();
};