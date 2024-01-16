<x-common.layout>
    <x-slot:title>
        登録
    </x-slot>
    <div class="">
        <form action="">
            @csrf
            <div class="">
                <label for="name">書籍名</label>
                <input type="text" name="name" id="name" required />
            </div>

            <div class="">
                <label for="isbn">ISBN</label>
                <input type="number" name="isbn" id="isbn" required />
            </div>

            <div class="">
                <label for="count">冊数</label>
                <input type="number" name="count" id="count" value="1" required />
            </div>


            <div class="">
                <label for="book-cover">書籍画像</label>
                <input type="file" id="book-cover" name="book-cover" accept="image/.png, image/.jpeg, image/.heic" />
            </div>

            <div class="">
                <label for="category-select">カテゴリー</label>
                <select name="category" id="category-select">
                    <option value="">カテゴリー</option>
                    <option value="javascript">JavaScript</option>
                    <option value="php">PHP</option>
                </select>
            </div>

            <label for="pet-select">タグ</label>
            <select multiple name="pets" id="pet-select">
                <option value="">--Please choose an option--</option>
                <option value="dog">Dog</option>
                <option value="cat">Cat</option>
            </select>


            <div class="">
                <label for="comment">コメント</label>
                <textarea name="comment" id="" cols="30" rows="5"></textarea>
            </div>

            <div class="">
                <label for="note">特記事項</label>
                <textarea name="note" id="" cols="30" rows="10"></textarea>
            </div>

            <p>
                <input type="submit" value="登録" />
            </p>
        </form>
    </div>
</x-common>