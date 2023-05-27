import createFraction from '../src/createFraction';

describe ('createFraction', () => {
    let f1, f2, f3;

    beforeAll(() => {
        f1 = new createFraction(24, 36);
        f2 = new createFraction(-2, 7);
        f3 = new createFraction(2, 7);
    });

    test('getNumer()', () => {
        expect(f1.getNumer()).toBe(2);
        expect(f2.getNumer()).toBe(-2);
    });

    test('getDenom()', () => {
        expect(f1.getDenom()).toBe(3);
        expect(f2.getDenom()).toBe(7);
    });

    test('add()', () => {
        expect(f1.add(f2).toString()).toBe('8/21');
        expect(f1.add(f3).toString()).toBe('20/21');
    })

    test('sub()', () => {
        expect(f1.sub(f2).toString()).toBe('20/21');
        expect(f1.sub(f3).toString()).toBe('8/21');
    })

    test('toString()', () => {
        expect(f1.add(f2).toString()).toBe('8/21');
        expect(f1.add(f3).toString()).toBe('20/21');
    })
});