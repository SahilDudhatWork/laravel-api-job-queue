# Laravel API with Job Queue, Database, and Event Handling

## Setup Instructions

1. Clone the repository:

2. Navigate to the project directory:

3. Install dependencies:

4. Configure your `.env` file with your database credentials.

5. Run the migrations:

6. Run the queue worker:

## Testing the API

To test the API, send a `POST` request to `/api/submit` with the following JSON payload:

```json
{
    "name": "John Doe",
    "email": "john.doe@example.com",
    "message": "This is a test message."
}
```
