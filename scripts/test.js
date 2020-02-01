var post = [
    ['Martin Garrix', 'A famous DJ in Netherlands.', 'on November 21, 2017', 'posts/music/1121-Martin-Garrix.html'],
    ['擁有獨特的嗓音，一位具有個人特色的藝術音樂家', 'Sainkho Namtchylak', 'on November 21, 2017', 'posts/music/Sainkho-Namtchylak.html'],
    ['Hello darkness, my old friend.', 'The Sound of Silence', 'on November 28, 2017', 'posts/music/The-sound-of-silence.html'],
    ['Trial and error', 'Learning from Error : assignment to expression with array type', 'on December 12, 2017', 'posts/Convergent-Thinking/assignment-to-expression-with-array-type.html'],
    ['印出直角三角形及菱形.', 'Print right triangle and diamond in C.', 'on December 14, 2017', 'posts/C/triangle.html'],
    ['Two AI robots : Sophia and Han Robot.', 'Two Robots first debate the future of humanity.', 'on December 16, 2017', 'posts/Technology/AI-debate.html'],
    ['常見的遞迴式總整理', 'Example of common recursion.', 'on December 16, 2017', 'posts/C/recursive.html'],
    ['常見的迭代式總整理', 'Example of common iteration.', 'on December 19, 2017', 'posts/C/iterative.html'],
    ['質數相關程式題', 'Example of prime number in C.', 'on December 19, 2017', 'posts/C/prime-number.html'],
    ['More range, higher speeds and increase broadcasting capacity.', 'Bluetooth 5.0', 'on November 08, 2017', 'posts/Technology/1108-Bluetooth5.html'],
    ['常見的泰勒展開式', 'Commonly Used Taylor Series.', 'on January 7, 2018', 'posts/C/taylor-series.html']
];

for (var i = post.length - 1; i >= 0; i--) {
    document.write('<div class="post-preview"><a href=' + post[i][3] + '>'); // link
    document.write('<h2 class="post-title">' + post[i][0] + '</h2></a>'); // post_title
    document.write('<h3 class="post-subtitle">' + post[i][1] + '</h3>'); // subtitle
    document.write('<p class="post-meta">Posted by<a href="#"> Sophie Xin </a>' + post[i][2] + '</p></div><hr>'); // date
}
