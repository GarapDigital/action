# Action
Action adalah sebuah Pola pengkodean yang memisahkan sebuah aksi tertentu dengan controller.

## Permasalahan
kalo udah tau konsep service pattern, ini mirip dengan service pattern, namun yang membedakan adalah Action pattern tidak menggunakan proses binding, Karena Action merupakan sebagian dari Logika Bisnis, Permasalahannya adalah bagaimana ketika kita ingin membuat sebuah aksi kecil yang ternyata tidak terdapat logika bisnis tentunya kita bingung karena hal tersebut tidak bisa dimasukkan kedalam service. misalnya Integrasi Third Party API, Otentikasi Menggunakan Pola Berbeda (Oauth, Oauth 2.0, dll). Sebagian orang menggunakan Action Sebagai Pengganti Service yang nantinya tetap akan ada proses binding ataupun langsung inject ke controller tanpa proses binding. Balik lagi semuanya tergantung bagaimana kebutuhan yang diperlukan sistem anda.

## Konsep Dasar
<img src="https://github.com/GarapDigital/action/blob/master/action-pattern.JPG" width="700" alt="Terminable Image">

- C = Controller
- U = User Model (Contoh)
- UP = User Profile Model (Contoh)
- Tikum = Titik Kumpul Atau Assembly Point (Bahasa gue biar ngga pusing hehe)
- User DTO = User Data Transfer Object yang mana Terdiri dari Interface Data User dan User Profile
- A = Action (Satu DTO dapat dipakai oleh banyak Action yang terhubung Satu Sama Lain Melalui Controller)

## Support us
By Follow this Github Organization, and Share our websites or social media platform to your friends [Garap Digital](https://garapdigital.id/)

## Credits

- [Wirandra Alaya](https://github.com/dayCod)
- [All Contributors](https://github.com/GarapDigital/distrackhub/contributors)

## License

This project is released under the [MIT](http://opensource.org/licenses/MIT) license.
