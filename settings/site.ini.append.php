<?php /* #?ini charset="utf-8"?

[RoleSettings]
PolicyOmitList[]=cookie

[RegionalSettings]
TranslationExtensions[]=occookielaw

[Event]
Listeners[]=response/output@OCCookieLaw::injectAlert
Listeners[]=request/input@OCCookieLaw::checkIfNeeded

[OutputSettings]
OutputFilterName=OCCookieLaw

*/ ?>
