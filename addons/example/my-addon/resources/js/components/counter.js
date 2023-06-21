export default () => ({
    counter: 0,
    test: [
        'test1',
        'test2',
        'test3',
        'test4',
        'test5',
        'test6',
    ],
    init() {
        console.log('hello from counter.js');
    },
    increment() {
        console.log('hello from increment');
        this.counter++;
    },
});
