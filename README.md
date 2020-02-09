# Mexican Hat

Neural network based on competition with fixed weight. This repository is archived from the 6th-semester final project on the artificial neural network course, Sriwijaya University.

## Team members:

* Dian Palupi Rini (Lecturer) - [Scholar](https://scholar.google.com/citations?user=e7uhEJMAAAAJ&hl=en)
* Riska Wati Savitri - [LinkedIn](https://www.linkedin.com/in/riska-wati-savitri-785104198/), [Instagram](https://www.instagram.com/savitri59/)
* Maharani Putri Rama - [Instagram](https://www.instagram.com/maharaniputriramaa/)
* Atan Wicaksana Ramadhanti - [LinkedIn](https://www.linkedin.com/in/atan-w-ramadhanti-845936188/), [Instagram](https://www.instagram.com/atanwrawr/)
* Muhammad Irfan Triananto Putra - [LinkedIn](https://www.linkedin.com/in/trianantoputra/)


## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes. The system is made with [CodeIgniter](https://codeigniter.com/)

### Prerequisites

What things you need to install the software

* Local server - [XAMPP](https://www.apachefriends.org/index.html), etc.
* Browser - [Google Chrome](https://www.google.com/chrome/), [Firefox](https://www.mozilla.org/en-US/firefox/new/), etc.

### Running the tests

* open XAMPP, run Apache.
* open url in the browser "localhost/{folder name}" (or 127.0.0.1), use **one** of the following:
```
localhost/hat

localhost:8080/hat // if manually used port 8080

127.0.0.1/hat
```

### Input

choose one or more of the following symptoms:

<p align="center">
  <img src="1-input.png" alt="input" width="738">
</p>

### Output

the systems will give the percentage of likely the patient has the disease.

<p align="center">
  <img src="2-output.png" alt="output" width="738">
</p>
How to use
*******************

1. Input Vector
ex: 0,0.5, 0.8, 1, 0.8, 0.5,0

2. Input Radius
ex: 1,2

3. Input Constant
ex: 0.6, -0.4

4. Input T_Max
ex: 0,1,2,3,4

**************************
Output
**************************

List new vectors
Graph of the vectors
Calculations

## Reference
* Pengembangan sistem pakar mendeteksi penyakit pencernaan menggunakan metode Naive Bayes berbasis website, [Imam Soleh Ma'rifati, 2018](https://github.com/trianantoputra/expert-system-atan/blob/master/paper.pdf)