var irc = require('irc');
var mongojs = require('mongojs');

module.exports = {
	client: new irc.Client('irc.freenode.net', 'troll_logs', {
		channels: ['#laravel'],
	}),
	logs: mongojs('irclogs').collection('mylogs'),
	hipchat: null,
	pushover: null,
};
