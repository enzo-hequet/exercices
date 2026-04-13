import { Selector } from 'testcafe';

fixture `TP Test`
    .page `http://localhost:8000/index.php`;

test('Nom en majuscule', async t => {
    await t
        .typeText('input', 'test')
        .click('button')
        .expect(Selector('body').innerText).contains('TEST');
});