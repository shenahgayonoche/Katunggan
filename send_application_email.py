import sys
import smtplib
from email.message import EmailMessage


def main() -> None:
    # This script is intended to be called by PHP.
    # Usage:
    #   python send_application_email.py <recipient_email> <subject>
    # and the email body is piped via STDIN.

    sender_email = "shenah.gayonoche0403@gmail.com"  # change if needed

    # TODO:
    sender_password = "oerp azlv gvcg mcur"  #paste your valid Gmail App Password here (App Passwords required)


    receiver = sys.argv[1] if len(sys.argv) > 1 else ""
    subject = sys.argv[2] if len(sys.argv) > 2 else ""
    message = sys.stdin.read() if not sys.stdin.isatty() else ""

    if not receiver:
        print("ERROR: Missing recipient email")
        sys.exit(1)

    msg = EmailMessage()
    msg["From"] = sender_email
    msg["To"] = receiver
    msg["Subject"] = subject
    msg.set_content(message)

    try:
        with smtplib.SMTP("smtp.gmail.com", 587, timeout=20) as server:
            server.ehlo()
            server.starttls()
            server.login(sender_email, sender_password)
            server.send_message(msg)

        print("SUCCESS")
    except Exception as e:
        print(f"ERROR: {e}")
        sys.exit(1)


if __name__ == "__main__":
    main()

