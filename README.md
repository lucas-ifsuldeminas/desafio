<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Redberry](https://redberry.international/laravel-development/)**
- **[Active Logic](https://activelogic.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

ENTRADA
{
  "id": "uuid",
  "name": "string",
  "age": "int",
  "score": "int",
  "active": "bool",
  "country": "string",
  "team": {
    "name": "string",
    "leader": "bool",
    "projects": [{ "name": "string", "completed": "bool" }]
  },
  "logs": [{ "date": "YYYY-MM-DD", "action": "login/logout" }]
}


ENDPOINTS
{
  "POST /users": {
    "descricao": "Envia o arquivo JSON de usuários para ser carregado na memória.",
    "request": {
      "Content-Type": "application/json",
      "body": "[...conteúdo do usuarios.json...]"
    },
    "response": {
      "status": 200,
      "body": {
        "message": "Arquivo recebido com sucesso",
        "user_count": 100000
      }
    }
  },
  "GET /superusers": {
    "descricao": "Retorna os usuários com score >= 900 e ativos, com tempo de execução.",
    "response": {
      "status": 200,
      "body": {
        "timestamp": "2025-04-02T15:00:00Z",
        "execution_time_ms": 127,
        "data": "[...lista de superusuários...]"
      }
    }
  },
  "GET /top-countries": {
    "descricao": "Agrupa os superusuários por país e retorna os 5 com mais usuários.",
    "response": {
      "status": 200,
      "body": {
        "timestamp": "2025-04-02T15:00:00Z",
        "execution_time_ms": 127,
        "countries": [
          {
            "country": "Brasil",
            "total": 2387
          },
          {
            "country": "Índia",
            "total": 2210
          },
          {
            "country": "Alemanha",
            "total": 2143
          },
          {
            "country": "EUA",
            "total": 1988
          },
          {
            "country": "Japão",
            "total": 1871
          }
        ]
      }
    }
  },
  "GET /team-insights": {
    "descricao": "Retorna estatísticas por equipe com base nos membros, projetos e liderança.",
    "response": {
      "status": 200,
      "body": {
        "timestamp": "2025-04-02T15:00:00Z",
        "execution_time_ms": 127,
        "teams": [
          {
            "team": "Frontend Avengers",
            "total_members": 1890,
            "leaders": 165,
            "completed_projects": 2750,
            "active_percentage": 79.3
          },
          {
            "team": "DevOps Masters",
            "total_members": 1954,
            "leaders": 158,
            "completed_projects": 2822,
            "active_percentage": 82.1
          }
        ]
      }
    }
  },
  "GET /active-users-per-day": {
    "descricao": "Retorna o número total de logins por data.",
    "response": {
      "status": 200,
      "body": {
        "timestamp": "2025-04-02T15:00:00Z",
        "execution_time_ms": 127,
        "logins": [
          {
            "date": "2025-03-26",
            "total": 3012
          },
          {
            "date": "2025-03-27",
            "total": 2875
          },
          {
            "date": "2025-03-28",
            "total": 3250
          },
          {
            "date": "2025-03-29",
            "total": 3188
          }
        ]
      }
    }
  },
  "GET /evaluation": {
    "descricao": "Executa testes automáticos nos endpoints da própria API e retorna um relatório de pontuação.",
    "response": {
      "status": 200,
      "body": {
        "tested_endpoints": {
          "/superusuarios": {
            "status": 200,
            "time_ms": 123,
            "valid_response": true
          },
          "/ranking-paises": {
            "status": 200,
            "time_ms": 98,
            "valid_response": true
          },
          "/analise-equipes": {
            "status": 200,
            "time_ms": 155,
            "valid_response": true
          },
          "/usuarios-ativos-por-dia": {
            "status": 200,
            "time_ms": 134,
            "valid_response": true
          }
        }
      }
    }
  }
}
