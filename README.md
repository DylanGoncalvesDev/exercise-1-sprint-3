# SOLID Principles Refactoring

## Overview

This project consists of a series of refactoring exercises focused on applying the SOLID principles. The goal is to analyze existing code, identify design issues, and improve its structure while preserving its original functionality.

Through these exercises, the codebase was refactored to better follow object-oriented design best practices, resulting in software that is easier to maintain, extend, test, and understand.

---

# SOLID Principles Covered

### S - Single Responsibility Principle

A class should have only one reason to change. Responsibilities were separated into dedicated classes to improve cohesion and maintainability.

### O - Open/Closed Principle

The code was redesigned so that new functionality can be added without modifying existing implementations.

### L - Liskov Substitution Principle

Inheritance hierarchies were reviewed to ensure derived classes can replace their base classes without altering the expected behavior of the application.

### I - Interface Segregation Principle

Large interfaces were split into smaller, more specific interfaces so that classes only depend on the methods they actually need.

### D - Dependency Inversion Principle

High-level modules were decoupled from low-level implementations by depending on abstractions rather than concrete classes.

---

# Technologies Used
- PHP
- Git
- GitHub
- VScode

---

```text
Project Structure
src
├── Level-1
│   ├── S
│   └── D
│
├── Level-2
│   ├── O
│   └── I
│
└── Level-3
    └── L
```

---

**Each folder contains the solution corresponding to the SOLID principle being practiced.**

+ Learning Objectives
+ Understand the purpose of each SOLID principle.
+ Improve code quality through refactoring.
+ Reduce coupling between components.
+ Increase code maintainability and scalability.
+ Apply object-oriented design best practices.
+ Develop cleaner and more extensible software architectures.

---

# How to Run

+ **Clone the repository:**

```bash
git clone https://github.com/DylanGoncalvesDev/exercise-1-sprint-3.git
```

+ **Navigate to the project directory:**

```bash
cd exercise-1-sprint-3
```

+ **Open the project in your preferred IDE.**

+ **Execute the classes corresponding to each exercise.**

---

# Author

**Dylan Gonçalves**

**GitHub:** https://github.com/DylanGoncalvesDev

---

# Conclusion

This project provides practical experience applying the SOLID principles through code refactoring. By improving the design of existing implementations, the resulting code becomes more modular, flexible, and easier to maintain, reinforcing key software engineering concepts used in professional development.
