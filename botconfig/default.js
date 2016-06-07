var irc = require('irc');
var mongojs = require('mongojs');

module.exports = {
	client: new irc.Client('irc.freenode.net', 'troll_logs', {
		channels: ['#senseo'],
	}),
	logs: mongojs('irclogs').collection('logs'),
	hipchat: null,
	pushover: null,
};
