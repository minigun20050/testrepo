// let text = 'Chuck Norris tells Simon what to do.' +
//  'What’s the strongest part of Chuck Norris? His opinion.';
// // let textObject = new String('Ala ma kota, a sierotka ma rysia' +
// // 'What’s the strongest part of Chuck Norris? His opinion.');
// // console.log(text == textObject);
// /*console.log(text.length);
// console.log(text.charAt(4));
// console.log(text.at(-3));
// console.log(text.slice(7, 69));
// console.log(text.slice(7, -69));
// console.log(text.substring(7, 69));
// console.log(text.substr(7, 69));
// console.log(text.toUpperCase(7, 69));
// console.log(text.toLowerCase(7, 69));
// console.log(text.concat(' ', 'The flu gets a Chuck Norris shot every year.'));
// // bla-bla-bla
// console.log(text.replaceAll('Chuck Norris', '🧔'));
// console.log(text.split(' ')); */
// console.log(text.match('His'));
// console.log(Array.from(text.matchAll('His')));
// console.log((text.search('of')));
// console.log((text.indexOf('of')));

// console.log(text.search(/of/));
// console.log(Array.from(text.matchAll(/of/g)));
// console.log(text.search(/of/));
// console.log(text.indexOf(/of/));




let text = 'Chuck Norris once ate at Taco Bell and didn’t get diarrhea.Chuck Norris can play the violin with a piano. Chuck Norris used to beat the shit out of his shadow because it was following to close. It now stands a safe 30 feet behind him.When Chuck Norris writes, he makes paper bleed.Chuck Norris once won an underwater breathing contest. With a fish.Chuck Norris can dribble a bowling ball.What’s the strongest part of Chuck Norris? His opinion.Chuck Norris tells Simon what to do.Chuck Norris threw a grenade and killed 50 people. Then it exploded.';
//kluska
// console.log(text.search('Chuck'));
// console.log(text.search('Norris'));
// console.log(text.slice(6, 999));
console.log(Array.from(text.matchAll("Chuck")));
console.log(text.re("Chuck"));