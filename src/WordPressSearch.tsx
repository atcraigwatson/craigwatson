import React, { useState, useEffect } from "react";

const WordPressSearch = () => {
  const [searchTerm, setSearchTerm] = useState("");
  const [posts, setPosts] = useState([]);
  const [loading, setLoading] = useState(false);
  const [error, setError] = useState(null);

  useEffect(() => {
    if (searchTerm.trim().length <= 4) {
      setPosts([]); // Clear posts if the search term is empty
      return;
    }

    const fetchPosts = async () => {
      setLoading(true);
      setError(null);
      try {
        const response = await fetch(
          `/wp-json/wp/v2/posts?search=${encodeURIComponent(searchTerm)}`
        );
        if (!response.ok) {
          throw new Error("Failed to fetch posts");
        }
        const data = await response.json();
        setPosts(data);
      } catch (error) {
        setError(error.message);
      } finally {
        setLoading(false);
      }
    };

    fetchPosts();
  }, [searchTerm]);

  return (
    <div class="card bg-secondary w-100 mb-3">
      <div class="card-header border-bottom py-3">Quick Search</div>
      <div class="card-body">
        <form>
          <div class="input-group mb-3">
            <span class="input-group-text text-bg-secondary" id="basic-addon1">
              <i class="bi bi-search"></i>
            </span>
            <input
              type="text"
              className="form-control"
              placeholder="Search"
              aria-label="Search"
              aria-describedby="Quick Search"
              autocomplete="off"
              value={searchTerm}
              onChange={(e) => setSearchTerm(e.target.value)}
            />
          </div>
        </form>
        {loading && <p>Loading...</p>}
        {error && <p style={{ color: "red" }}>{error}</p>}
        <div className="list-group">
          {posts.map((post) => (
            <a
              key={post.id}
              href={post.link}
              className="list-group-item list-group-item-action"
              rel="noopener noreferrer"
            >
              {post.title.rendered}
            </a>
          ))}
        </div>
        {posts.length === 0 &&
          searchTerm &&
          searchTerm.length >= 4 &&
          !loading &&
          !error && <p>No results found for "{searchTerm}".</p>}
      </div>
    </div>
  );
};

export default WordPressSearch;
