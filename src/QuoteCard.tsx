import React, { useState, useEffect } from "react";

const QuoteCard = () => {
  const [quote, setQuote] = useState("");
  const [author, setAuthor] = useState("");
  const [loading, setLoading] = useState(false);
  const [error, setError] = useState(null);

  useEffect(() => {
    const fetchQuote = async () => {
      setLoading(true);
      setError(null);
      try {
        const response = await fetch("https://zenquotes.io/api/random");
        if (!response.ok) {
          throw new Error("Failed to fetch quote");
        }
        const data = await response.json();
        setQuote(data.q);
        setAuthor(data.a);
      } catch (error) {
        setError(error.message);
      } finally {
        setLoading(false);
      }
    };
 
    fetchQuote();
  }, []);

  return (
    <div className="card bg-secondary w-100 mb-3">
      <div class="card-header border-bottom py-3">Random Quotes</div>
      <div className="card-body">
        <blockquote class="blockquote mb-0">
          {loading && <p className="card-text">Loading...</p>}
          {error && <p className="card-text text-danger">{error}</p>}
          {!loading && !error && (
            <>
              <p className="card-text">"{quote}"</p>
              <footer className="blockquote-footer">
                {author || "Unknown"}
              </footer>
            </>
          )}
        </blockquote>
      </div>
      <div className="card-footer">
        Inspirational quotes provided by{" "}
        <a href="https://zenquotes.io/" target="_blank">
          ZenQuotes API
        </a>
      </div>
    </div>
  );
};

export default QuoteCard;
